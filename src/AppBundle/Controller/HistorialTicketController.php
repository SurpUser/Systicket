<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HistorialTicketController extends Controller
{
    /**
     * @Route("/HistorialTicket", name="historialticket_lista")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('HistorialTicket/historial.html.twig');
    }
}