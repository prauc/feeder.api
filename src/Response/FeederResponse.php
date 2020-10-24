<?php


namespace App\Response;


use App\Entity\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

class FeederResponse
{
    public $test = "asd";
    public $content;

    private $entityManager;

    /**
     * FeederResponse constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function create(ArrayCollection $content, String $persistentObject)
    {
        $this->content = $content->map(function($node) use ($persistentObject) {
            $class = new \ReflectionClass($persistentObject);

            /** @var ResponseInterface $instance */
            $instance = $class->newInstance($this->entityManager);
            return $instance->convert($node);
        })->toArray();
    }
}