<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoriaTicketController extends Controller
{
    /**
     * @Route("/Categoria", name="categoriaticket_lista")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Categoria/categoria.html.twig');
    }
}