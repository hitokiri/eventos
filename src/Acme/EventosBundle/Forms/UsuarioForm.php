<?php

namespace Acme\EventosBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
*
*/
class UsuarioForm extends AbstractType{

	public function buildForm(FormBuilderInterface $builder, array $options){

		$builder -> add('nambre');
		$builder -> add('apellidos');
		$builder -> add('mail');
		$builder -> add('telefono');
		$builder -> add('dui');
		$builder -> add('comunidad');
		$builder -> add('direccion');
	}

	public function getName(){
		return 'nambre';
	}
}

 ?>