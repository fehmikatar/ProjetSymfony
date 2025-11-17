<?php
// src/Controller/BackController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin', name: 'app_back_')]
class BackController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function dashboard(): Response
    {
        return $this->render('back/dashboard.html.twig');
    }

    #[Route('/tables', name: 'tables')]
    public function tables(): Response
    {
        return $this->render('back/tables.html.twig');
    }

    #[Route('/wallet', name: 'wallet')]
    public function wallet(): Response
    {
        return $this->render('back/wallet.html.twig');
    }

    #[Route('/profile', name: 'profile')]
    public function profile(): Response
    {
        return $this->render('back/profile.html.twig');
    }

    #[Route('/rtl', name: 'rtl')]
    public function rtl(): Response
    {
        return $this->render('back/rtl.html.twig');
    }

    #[Route('/sign-in', name: 'signin')]
    public function signin(): Response
    {
        return $this->render('back/sign-in.html.twig');
    }

    #[Route('/sign-up', name: 'signup')]
    public function signup(): Response
    {
        return $this->render('back/sign-up.html.twig');
    }

    // Redirection de /admin vers dashboard
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->redirectToRoute('app_back_dashboard');
    }
}