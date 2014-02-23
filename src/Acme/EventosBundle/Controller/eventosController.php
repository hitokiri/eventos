<?php

namespace Acme\EventosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\EventosBundle\Entity\Usuarios;
use Symfony\Component\HttpFoundation\Request;
use Acme\EventosBundle\Forms\UsuarioForm;

class eventosController extends Controller{

    public function indexAction(){
	    $params = array('mensaje' => 'Bienvenido al Registro del Evento',
						'fecha' => date('d-m-yy'),
						);
	    return $this->render('EventosBundle:eventos:index.html.twig',$params);
    }

      public function crearAction(Request $request){
      	$usuarios = new Usuarios();
      	$form = $this->createForm(new UsuarioForm(), $usuarios);
	    $params = array('mensaje' => 'Crear Usuario',
						'fecha' => date('d-m-yy'),
						'form' => $form->createView(),
						);
	    return $this->render('EventosBundle:eventos:crear.html.twig',$params);
    }

}