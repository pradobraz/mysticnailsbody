<?php

namespace App\Controller;

use App\Entity\Marcacoes;
use App\Form\MarcacoesType;
use App\Repository\MarcacoesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/marcacoes")
 */
class MarcacoesController extends AbstractController
{
    /**
     * @Route("/", name="marcacoes_index", methods={"GET"})
     */
    public function index(MarcacoesRepository $marcacoesRepository): Response
    {
        return $this->render('marcacoes/index.html.twig', [
            'marcacoes' => $marcacoesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="marcacoes_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $marcaco = new Marcacoes();
        $form = $this->createForm(MarcacoesType::class, $marcaco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($marcaco);
            $entityManager->flush();

            return $this->redirectToRoute('marcacoes_index');
        }

        return $this->render('marcacoes/new.html.twig', [
            'marcaco' => $marcaco,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="marcacoes_show", methods={"GET"})
     */
    public function show(Marcacoes $marcaco): Response
    {
        return $this->render('marcacoes/show.html.twig', [
            'marcaco' => $marcaco,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="marcacoes_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Marcacoes $marcaco): Response
    {
        $form = $this->createForm(MarcacoesType::class, $marcaco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('marcacoes_index');
        }

        return $this->render('marcacoes/edit.html.twig', [
            'marcaco' => $marcaco,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="marcacoes_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Marcacoes $marcaco): Response
    {
        if ($this->isCsrfTokenValid('delete'.$marcaco->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($marcaco);
            $entityManager->flush();
        }

        return $this->redirectToRoute('marcacoes_index');
    }
}
