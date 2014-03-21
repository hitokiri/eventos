<?php
namespace Acme\EventosBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
*
*/
class PedidosDistrosForm extends AbstractType{

	public function buildForm(FormBuilderInterface $builder, array $options){

		$builder -> add('nombre');
		$builder -> add('distro_cantidad');

	}

	public function getName(){
		return 'pedidos';
	}

 ?>