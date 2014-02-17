<?php

namespace Acme\EventosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class eventosController extends Controller{

	     public function indexAction(){
	     $params = array('mensaje' => 'Bienvenido al Registro del Evento',
						 'fecha' => date('d-m-yy'),
						);


        return $this->render('EventosBundle:eventos:index.html.twig',$params);
    }
}