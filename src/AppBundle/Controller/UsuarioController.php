<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends Controller
{
    /**
     * @Route("/usuario", name="usuario_lista")
     */
    public function indexAction(Request $request)
    {
        /*$usuario = new Usuario();
        $usuario->setNombres("Francis");
        $usuario->setApellidos("Castillo");
        $usuario->setUsername("Surpuser");
        $usuario->setPassword("12345");
        $usuario->setTipoUsuario(1);
        $usuario->setRolId(1);
        $usuario->setEstado("activo");
        $usuario->setFechaRegistro(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('Nombres', string::Usuario)
            ->add('Apellidos', string::Usuario)
            ->add('save', SubmitType::Usuario, array('label' => 'Create Task'))
            ->getForm();

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
*/
        // replace this example code with whatever you need
        //return $this->render('default/index.html.twig', [
        //    'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        //]);

        //return $this->render('AppBundle::usuario.html.twig', array('base_dir'=>"usuario",)); 

        // replace this example code with whatever you need
        return $this->render('usuario/usuario.html.twig');

    }
}
