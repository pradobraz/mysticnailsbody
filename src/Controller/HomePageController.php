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
     * @Route("/home", name="home_page") //home/page
     */
    public function index(Request $request)//MarcacoesRepository $marcacoesRepository,
    {

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            //'marcacoes' => $marcacoesRepository->findAll(),

        ]);
    }

}
