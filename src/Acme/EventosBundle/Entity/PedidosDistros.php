<?php

namespace Acme\EventosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="pedidosdistros")
*/

class PedidosDistros{

/**
* @ORM\Column(type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
 	protected $id;

/**
 * @ORM\ManyToOne(targetEntity="Distros", inversedBy="pedidosdistros")
 * @ORM\JoinColumn(name="distro_id", referencedColumnName="id")
 */
    protected $distro;

/**
 * @ORM\ManyToOne(targetEntity="Usuarios", inversedBy="pedidosdistros")
 * @ORM\JoinColumn(name="usuarios_id", referencedColumnName="id")
 */
    protected $usuario;

/**
* @ORM\Column(type="integer")
*/

    protected $distrocantidad;




    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set distrocantidad
     *
     * @param integer $distrocantidad
     * @return PedidosDistros
     */
    public function setDistrocantidad($distrocantidad)
    {
        $this->distrocantidad = $distrocantidad;

        return $this;
    }

    /**
     * Get distrocantidad
     *
     * @return integer 
     */
    public function getDistrocantidad()
    {
        return $this->distrocantidad;
    }

    /**
     * Set distro
     *
     * @param \Acme\EventosBundle\Entity\Distros $distro
     * @return PedidosDistros
     */
    public function setDistro(\Acme\EventosBundle\Entity\Distros $distro = null)
    {
        $this->distro = $distro;

        return $this;
    }

    /**
     * Get distro
     *
     * @return \Acme\EventosBundle\Entity\Distros 
     */
    public function getDistro()
    {
        return $this->distro;
    }

    /**
     * Set usuario
     *
     * @param \Acme\EventosBundle\Entity\Usuarios $usuario
     * @return PedidosDistros
     */
    public function setUsuario( \Acme\EventosBundle\Entity\Usuarios  $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Acme\EventosBundle\Entity\Usuarios 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
