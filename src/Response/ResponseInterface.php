<?php


namespace App\Response;


use App\Entity\Entity;
use Doctrine\Persistence\ObjectManager;

interface ResponseInterface
{
    public function __construct(ObjectManager $objectManager);

    public function convert(Entity $entity);
}