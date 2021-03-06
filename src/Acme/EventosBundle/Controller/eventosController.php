<?php

namespace Acme\EventosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\EventosBundle\Entity\Usuarios;
use Acme\EventosBundle\Entity\Distros;
use Acme\EventosBundle\Entity\PedidosDistros;
use Symfony\Component\HttpFoundation\Request;
use Acme\EventosBundle\Forms\UsuarioForm;
use Acme\EventosBundle\Forms\DistrosForm;
use Acme\EventosBundle\Forms\PedidosDistrosForm;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
      	$form->handleRequest($request);

	    if ($form->isValid()) {
	    	$dir = '/var/www/eventos/web/bundles/eventos/images';
	    	$form['imagen']->getData()->move($dir);
	        $em = $this->getDoctrine()->getManager();
		    $em->persist($usuarios);
		    $em->flush();

	        return $this->redirect($this->generateUrl('usuario_crear'));
	    }
	    $params = array('vista' => 'crear',
						'form' => $form->createView(),
						);
	    return $this->render('EventosBundle:eventos:crear.html.twig',$params);
    }

    public function mostrarTodoAction(){
      	$repositorio = $this -> getDoctrine()
      				->getRepository('EventosBundle:Usuarios');

      	$consulta = $repositorio->findAll();

	    $params = array('mensaje' => 'Crear Usuario',
						'fecha' => date('d-m-yy'),
						'todos' => $consulta,
						);
	    return $this->render('EventosBundle:eventos:mostrarTodo.html.twig',$params);
    }

    public function opcionAction($opcion){
    	$repositorio = $this -> getDoctrine()
      				->getRepository('EventosBundle:Usuarios');

      	$consulta = $repositorio->findAll();
    	$params = array('opcion' => $opcion,
    					'usuarios' => $consulta,
              'vista' => $opcion,
    					);
    	return $this -> render('EventosBundle:eventos:opcion.html.twig',$params);
    }

    public function opcion_DeletAction($id){
    	$params = array('opcion' => $id,
    					);
    	return $this -> render('EventosBundle:eventos:opcion_delet.html.twig',$params);
    }

    public function opcion_UpdateAction($id){
    	$params = array('opcion' => $id,
                      'vista' => 'modificar1',
    					);
    	return $this -> render('EventosBundle:eventos:opcion_update.html.twig',$params);
    }

     public function distros_crearAction(Request $request){
      	$usuarios = new Distros();
        	$form = $this->createForm(new DistrosForm(), $usuarios);
        	$form->handleRequest($request);

  	    if ($form->isValid()) {
  	    	$dir = '/var/www/eventos/web/bundles/eventos/images';
  	    	$form['logo']->getData()->move($dir);
  	        $em = $this->getDoctrine()->getManager();
  		    $em->persist($usuarios);
  		    $em->flush();

  	    return $this->redirect($this->generateUrl('distros_crear'));
     		}
  	    $params = array('form' => $form->createView(),
  						);
	     return $this->render('EventosBundle:eventos:Distros.html.twig',$params);
	}

	public function distros_mostrarAction(){
      	$repositorio = $this -> getDoctrine()
      				->getRepository('EventosBundle:Distros');

      	$consulta = $repositorio->findAll();

	    $params = array('todos' => $consulta,
						);
	    return $this->render('EventosBundle:eventos:DistrosmostrarTodo.html.twig',$params);
    }

  public function finalizarAction($opcion, $id){

      $barra = array('<div class="caja_barra_deactive">Listar</div>',
      '<div class="flecha_barra_deactive"></div>',
      '<div class="caja_barra2"> Modificar</div>',
      '<div class="flecha_barra2"></div>',
      '<div class="caja_barra_deactive">Finalizar</div>',
      '<div class="flecha_barra_deactive"></div>',);

      $params = array('opcion' => $opcion,
                      'id' => $id,
                      'vista' => 'finalizar',
                      'barra' => $barra,
              );
      return $this -> render('EventosBundle:eventos:finalizar.html.twig',$params);
    }

  public function crear_pedidoAction($id){
    $repositorio = $this -> getDoctrine()
              ->getRepository('EventosBundle:Distros');

        $consulta = $repositorio->findAll();

      $params = array('id' => $id,
                      'vista' => 'finalizar',
                      'consulta' => $consulta,
              );
      return $this -> render('EventosBundle:eventos:crear_pedido.html.twig',$params);
    }
}