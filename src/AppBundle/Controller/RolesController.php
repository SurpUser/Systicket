<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RolesController extends Controller
{
    /**
     * @Route("/roles", name="roles_lista")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('roles/roles.html.twig');
    }
}