<?php

namespace App\Controller\v100;

use App\Controller\AbstractFeederController;
use App\Entity\Home;
use App\Response\Home\HomeResponse;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/v1", name="1_home_")
 */
class HomeController extends AbstractFeederController
{
    /**
     * @Route("/home", name="index")
     */
    public function index(): Response
    {
        /* @var $home ArrayCollection<Home> */
        $home = $this->getDoctrine()
            ->getRepository(Home::class)
            ->findAll();

        $this->feederResponse->create($home, HomeResponse::class);

        return $this->json($this->feederResponse);
    }

    /**
     * @Route("/home/test", name="test")
     */
    public function test(): Response
    {
        return $this->json("...");
    }
}
