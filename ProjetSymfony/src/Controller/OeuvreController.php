<?php

namespace App\Controller;

use App\Entity\Oeuvre;
use App\Form\OeuvreType;
use App\Repository\OeuvreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/oeuvre')]
class OeuvreController extends AbstractController
{
    public function __construct(private readonly SluggerInterface $slugger)
    {
    }

    #[Route('/', name: 'app_oeuvre_index', methods: ['GET'])]
    public function index(OeuvreRepository $oeuvreRepository): Response
    {
        return $this->render('oeuvre/index.html.twig', [
            'oeuvres' => $oeuvreRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_oeuvre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $oeuvre = new Oeuvre();
        $form = $this->createForm(OeuvreType::class, $oeuvre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleImageUpload($oeuvre);

            $entityManager->persist($oeuvre);
            $entityManager->flush();

            $this->addFlash('success', 'Œuvre ajoutée avec succès.');
            return $this->redirectToRoute('app_oeuvre_index');
        }

        return $this->render('oeuvre/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_oeuvre_show', methods: ['GET'])]
    public function show(Oeuvre $oeuvre): Response
    {
        return $this->render('oeuvre/show.html.twig', [
            'oeuvre' => $oeuvre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_oeuvre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Oeuvre $oeuvre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OeuvreType::class, $oeuvre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleImageUpload($oeuvre);

            $entityManager->flush();

            $this->addFlash('success', 'Œuvre modifiée avec succès.');
            return $this->redirectToRoute('app_oeuvre_index');
        }

        return $this->render('oeuvre/edit.html.twig', [
            'oeuvre' => $oeuvre,
            'form'   => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_oeuvre_delete', methods: ['POST'])]
    public function delete(Request $request, Oeuvre $oeuvre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$oeuvre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($oeuvre);
            $entityManager->flush();
            $this->addFlash('success', 'Œuvre supprimée avec succès.');
        }

        return $this->redirectToRoute('app_oeuvre_index');
    }

    private function handleImageUpload(Oeuvre $oeuvre): void
    {
        $imageFile = $oeuvre->getImageFile();

        if ($imageFile instanceof \Symfony\Component\HttpFoundation\File\UploadedFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $this->slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
                $oeuvre->setImage($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Impossible d\'uploader l\'image : '.$e->getMessage());
            }
        }
    }
}