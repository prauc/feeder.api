<?php


namespace App\Controller;


use App\Response\FeederResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class AbstractFeederController extends AbstractController
{
    /**
     * @var FeederResponse
     */
    protected $feederResponse;

    /**
     * AbstractFeederController constructor.
     * @param FeederResponse $feederResponse
     */
    function __construct(FeederResponse $feederResponse)
    {
        $this->feederResponse = $feederResponse;
    }
}