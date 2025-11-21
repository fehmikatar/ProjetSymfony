<?php
// src/Controller/BackController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OeuvreRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Oeuvre;
use App\Entity\Category;
use App\Form\OeuvreType;
use App\Form\CategoryType;

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
    // ----- Œuvres -----

    #[Route('/oeuvres', name: 'oeuvres')]
    public function oeuvres(Request $request, OeuvreRepository $repo): Response
    {
        $search = $request->query->get('search');
        $qb = $repo->createQueryBuilder('o');
        if ($search) $qb->where('o.titre LIKE :search')->setParameter('search', "%$search%");
        $oeuvres = $qb->getQuery()->getResult();
        return $this->render('back/oeuvres.html.twig', compact('oeuvres', 'search'));
    }

    #[Route('/oeuvres/new', name: 'oeuvres_new')]
    public function newOeuvre(Request $request, EntityManagerInterface $em): Response
    {
        $oeuvre = new Oeuvre();
        $form = $this->createForm(OeuvreType::class, $oeuvre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($oeuvre);
            $em->flush();
            return $this->redirectToRoute('app_back_oeuvres');
        }
        return $this->render('back/oeuvre_form.html.twig', ['form' => $form]);
    }

    #[Route('/oeuvres/{id}/edit', name: 'oeuvres_edit')]
    public function editOeuvre(Request $request, Oeuvre $oeuvre, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(OeuvreType::class, $oeuvre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_back_oeuvres');
        }
        return $this->render('back/oeuvre_form.html.twig', ['form' => $form, 'oeuvre' => $oeuvre]);
    }

    #[Route('/oeuvres/{id}/delete', name: 'oeuvres_delete', methods: 'POST')]
    public function deleteOeuvre(Request $request, Oeuvre $oeuvre, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $oeuvre->getId(), $request->request->get('_token'))) {
            $em->remove($oeuvre);
            $em->flush();
        }
        return $this->redirectToRoute('app_back_oeuvres');
    }

    // ----- Catégories -----

    #[Route('/categories', name: 'categories')]
    public function categories(Request $request, CategoryRepository $repo): Response
    {
        $search = $request->query->get('search');
        $qb = $repo->createQueryBuilder('c');
        if ($search) $qb->where('c.nom LIKE :search')->setParameter('search', "%$search%");
        $categories = $qb->getQuery()->getResult();
        return $this->render('back/categories.html.twig', compact('categories', 'search'));
    }

    #[Route('/categories/new', name: 'categories_new')]
    public function newCategory(Request $request, EntityManagerInterface $em): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute('app_back_categories');
        }
        return $this->render('back/category_form.html.twig', ['form' => $form]);
    }

    #[Route('/categories/{id}/edit', name: 'categories_edit')]
    public function editCategory(Request $request, Category $category, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_back_categories');
        }
        return $this->render('back/category_form.html.twig', ['form' => $form, 'category' => $category]);
    }

    #[Route('/categories/{id}/delete', name: 'categories_delete', methods: 'POST')]
    public function deleteCategory(Request $request, Category $category, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $category->getId(), $request->request->get('_token'))) {
            $em->remove($category);
            $em->flush();
        }
        return $this->redirectToRoute('app_back_categories');
    }

}