<?php

namespace App\Controller\v200;

use App\Controller\AbstractFeederController;
use App\Entity\Home;
use App\Response\Home\HomeResponse;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/v2", name="2_home_")
 */
class HomeController extends AbstractFeederController
{
    /**
     * @Route("/home", name="index")
     */
    public function index(): Response
    {
        return $this->json("..");
    }

    /**
     * @Route("/home/test", name="test")
     */
    public function test(): Response
    {
        return $this->json("...");
    }
}
