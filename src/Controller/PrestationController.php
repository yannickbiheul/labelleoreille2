<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\UserRepository;
use App\Repository\GeneralRepository;
use App\Repository\PrestationRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="prestation")
     */
    public function index(GeneralRepository $generalRepository, 
    UserRepository $userRepository, PrestationRepository $prestationRepository,
    CategorieRepository $categorieRepository): Response
    {
        $general = $generalRepository->findOneBy(['logo' => 'logo.png']);
        $admin = $userRepository->findOneBy(['nom' => 'Fourel']);
        $prestations = $prestationRepository->findAll();
        $categories = $categorieRepository->findAll();
        return $this->render('prestation/index.html.twig', compact('general', 'admin', 'prestations'));
    }
}
