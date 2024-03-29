<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\WorkshopRepository;

#[Route('/')]
class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(WorkshopRepository $repository): Response
    {
        $workshops = $repository->findAll();
        
        return $this->render('home/index.html.twig', [
            'workshops'=>$workshops 
        ]);
    }
}
