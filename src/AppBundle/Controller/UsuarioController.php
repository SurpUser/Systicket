<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\CsrfFormLoginBundle\Form\UserLoginType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Usuario;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use BlogBundle\Form\UsuarioType;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;

class UsuarioController extends Controller
{
    /**
     * @Route("usuario/nuevo", name="usuario_insertar")
     */
    public function indexAction(Request $request)
    {
        return $this->render('usuario/insertarusuario.html.twig');
    }

    /**
     * @Route("usuario/vista", name="usuario_lista")
     */
    public function listaAction(Request $request)
    {
        return $this->render('usuario/usuario.html.twig');
    }

    /**
     * @Route("usuario/{idUsuario}/editar", name="usuario_buscareditar", requirements={"idUsuario"="\d+"})
     * @Method("GET")
     * @param Request $request
     * @param Usuario $usuario
     * @return JsonResponse
     */
    public function editarAction(Request $request, Usuario $usuario)
    {
        return $this->render('BlogBundle:Usuario:edit_user.html.twig', array('usuario' =>$usuario));
    }

    /**
     * @Route("usuario/delete/{idUsuario}", name="delete_usuarios", requirements={"idUsuario"="\d+"})
     * */
    public function deleteAction($idUsuario) {
        $posts = $this->getDoctrine()->getRepository("BlogBundle:Usuario")->find($idUsuario);
 
        $em = $this->getDoctrine()->getManager();
        $em->remove($posts);
        $em->flush();

        return $this->render('BlogBundle:Usuario:usuario.html.twig');
    }

    /**
     * @Route("usuario/lista", name="get_usuarios" )
     * @Method("GET")
     * */
    public function getAllUsuarios() {
        $categorias = $this->getDoctrine()
       ->getRepository('BlogBundle:Usuario')
       ->createQueryBuilder('c')
       ->select('c')
       ->getQuery()
       ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        return new JsonResponse($categorias);
    }

    /**
    * @Route("usuario/update/{idUsuario}", name="update_usuario", options={"expose"=true})
    * @param Request $request
    * @param Usuario $usuario
    * @Method({"PUT"})
    * @return JsonResponse
    * */
    public function updateUsuario(Request $request, Usuario $usuario){

        $data = json_decode($request->getContent(), true);

        $form = $this->createForm(UsuarioType::class, $usuario);
        $usuario->setFechaRegistro(New \DateTime());
        $form->submit($data);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
        }else{
            foreach ($form->getErrors() as $value) {
                $errors[] = $error->getMessage();
            }
        }

        $newUser = json_decode($this->get('serializer')->serialize($usuario,'json'), true);

        return new JsonResponse($newUser);
    }

    /**
     * @Route("usuario/get/{idUsuario}", name="get_usuario", requirements={"idUsuario"="\d+"} )
     * @Method("GET")
     * @param Request $request
     * @param Usuario $user
     * @return JsonResponse
     * */
    public function getUsuario(Request $request, Usuario $user)
    {
        $userJ = json_decode($this->get('serializer')->serialize($user, 'json'), true);
        return new JsonResponse($userJ);
    }

    /**
    * @Route("usuario/insertar", name="guardar_usuario", options={"expose"=true})
    * @param Request $request
    * @Method({"POST"})
    * @return JsonResponse
    * */
    public function postUsuario(Request $request){

        $data = json_decode($request->getContent(), true);

        $usuario = new Usuario();

        $form = $this->createForm(UsuarioType::class, $usuario);
        $usuario->setFechaRegistro(New \DateTime());
        $form->submit($data);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
        }else{
            dump("No es Valido");
        }

        $newUser = json_decode($this->get('serializer')->serialize($usuario,'json'), true);

        return new JsonResponse($newUser);
    }
}
