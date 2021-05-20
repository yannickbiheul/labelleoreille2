<?php

namespace App\Controller;

use App\Repository\GeneralRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(GeneralRepository $generalRepository, UserRepository $userRepository): Response
    {
        $general = $generalRepository->findOneBy(['logo' => 'logo.png']);
        $admin = $userRepository->findOneBy(['nom' => 'Fourel']);
        return $this->render('home/index.html.twig', compact('general', 'admin'));
    }
}
