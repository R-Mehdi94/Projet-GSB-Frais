<?php

namespace App\Controller;

use App\Entity\Fichefrais;
use App\Form\FichefraisType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fichefrais')]
class FichefraisController extends AbstractController
{
    #[Route('/', name: 'app_fichefrais_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $fichefrais = $entityManager
            ->getRepository(Fichefrais::class)
            ->findAll();

        return $this->render('fichefrais/index.html.twig', [
            'fichefrais' => $fichefrais,
        ]);
    }

    #[Route('/new', name: 'app_fichefrais_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $fichefrai = new Fichefrais();
        $form = $this->createForm(FichefraisType::class, $fichefrai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($fichefrai);
            $entityManager->flush();

            return $this->redirectToRoute('app_fichefrais_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fichefrais/new.html.twig', [
            'fichefrai' => $fichefrai,
            'form' => $form,
        ]);
    }

    #[Route('/{mois}', name: 'app_fichefrais_show', methods: ['GET'])]
    public function show(Fichefrais $fichefrai): Response
    {
        return $this->render('fichefrais/show.html.twig', [
            'fichefrai' => $fichefrai,
        ]);
    }

    #[Route('/{mois}/edit', name: 'app_fichefrais_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Fichefrais $fichefrai, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FichefraisType::class, $fichefrai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fichefrais_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fichefrais/edit.html.twig', [
            'fichefrai' => $fichefrai,
            'form' => $form,
        ]);
    }

    #[Route('/{mois}', name: 'app_fichefrais_delete', methods: ['POST'])]
    public function delete(Request $request, Fichefrais $fichefrai, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fichefrai->getMois(), $request->request->get('_token'))) {
            $entityManager->remove($fichefrai);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fichefrais_index', [], Response::HTTP_SEE_OTHER);
    }
}
