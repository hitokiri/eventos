<?php

namespace Acme\EventosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EventosBundle:Default:index.html.twig', array('name' => $name));
    }

     public function inicioAction($name)
    {
        return $this->render('EventosBundle:eventos:index.html.twig');
    }
}
