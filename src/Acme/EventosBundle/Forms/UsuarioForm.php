<?php

namespace Acme\EventosBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
*
*/
class UsuarioForm extends AbstractType{

	public function buildForm(FormBuilderInterface $builder, array $options){

		$builder -> add('nombre');
		$builder -> add('apellidos');
		$builder -> add('sexo', 'choice', array(
			'choices' => array('' => 'Seleccione una Opcion', 'm'=>'Masculino', 'f' => 'Femenino'),
			'preferred_choices' => array(''),
			));
		$builder -> add('mail');
		$builder -> add('telefono');
		$builder -> add('dui');
		$builder -> add('comunidad');
		$builder -> add('direccion');
		$builder -> add('imagen', 'file');
		$builder -> add('distros', 'entity', array(
			'class' => 'EventosBundle:Distros',
    		'property' => 'nombre',
    		'empty_value' => 'Seleccione una Distro',
			));
		$builder -> add('distro_cantidad');
	}

	public function getName(){
		return 'usuarios';
	}
}

 ?>