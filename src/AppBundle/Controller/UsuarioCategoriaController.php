<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsuarioCategoriaController extends Controller
{
    /**
     * @Route("/UsuarioCategoria", name="usuariocategoria_lista")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('UsuarioCategoria/usuariocategoria.html.twig');
    }
}