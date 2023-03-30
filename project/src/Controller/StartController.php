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
        $this->logger->info("Start logger");
        return $this->render('start/index.html.twig', [
            'controller_name' => 'StartController',
        ]);
    }
}
