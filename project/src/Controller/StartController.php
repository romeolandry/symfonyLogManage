<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StartController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger
    )
    {
        
    }
    #[Route('/', name: 'app_start')]
    public function index(): Response
    {
        for ($i=0; $i <500 ; $i++) { 
            $this->logger->info("I am Info");
            $this->logger->error("I am error");
            $this->logger->notice("I am notice");
            $this->logger->debug("I am debug");
            $this->logger->critical("I am critical");
            $this->logger->warning("I am warning");
        }
        
        return $this->render('start/index.html.twig', [
            'controller_name' => 'StartController',
        ]);
    }
}
