<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NotasController extends Controller
{
    /**
     * @Route("/Notas", name="notas_lista")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Notas/notas.html.twig');
    }
}