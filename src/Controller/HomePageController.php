<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Marcacoes;
use App\Repository\MarcacoesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home_page") //home/page
     */
    public function index(MarcacoesRepository $marcacoesRepository, Request $request, PaginatorInterface $paginator): Response
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'marcacoes' => $marcacoesRepository->findAll(),
        ]);
    }

}
