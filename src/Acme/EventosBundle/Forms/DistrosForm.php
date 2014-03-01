<?php

namespace Acme\EventosBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
*
*/
class DistrosForm extends AbstractType{

	public function buildForm(FormBuilderInterface $builder, array $options){

		$builder -> add('nombre');
		$builder -> add('distro_cantidad');
		$builder -> add('logo');

	}

	public function getName(){
		return 'nombre';
	}
}

 ?>