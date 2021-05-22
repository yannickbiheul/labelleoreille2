<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\GeneralRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="prestation")
     */
    public function index(GeneralRepository $generalRepository, UserRepository $userRepository): Response
    {
        $general = $generalRepository->findOneBy(['logo' => 'logo.png']);
        $admin = $userRepository->findOneBy(['nom' => 'Fourel']);
        return $this->render('prestation/index.html.twig', compact('general', 'admin'));
    }
}
