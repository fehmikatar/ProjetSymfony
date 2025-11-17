<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front_index')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig');
    }

    #[Route('/about', name: 'app_front_about')]
    public function about(): Response
    {
        return $this->render('front/about.html.twig');
    }

    #[Route('/resume', name: 'app_front_resume')]
    public function resume(): Response
    {
        return $this->render('front/resume.html.twig');
    }

    #[Route('/services', name: 'app_front_services')]
    public function services(): Response
    {
        return $this->render('front/services.html.twig');
    }

    #[Route('/portfolio', name: 'app_front_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('front/portfolio.html.twig');
    }

    #[Route('/portfolio/details', name: 'app_front_portfolio_details')]
    public function portfolioDetails(): Response
    {
        return $this->render('front/portfolio-details.html.twig');
    }

    #[Route('/contact', name: 'app_front_contact')]
    public function contact(): Response
    {
        return $this->render('front/contact.html.twig');
    }
}