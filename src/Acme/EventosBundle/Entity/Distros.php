<?php

namespace Acme\EventosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="distros")
*/

class Distros{

/**
* @ORM\Column(type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
 	protected $id;

/**
* @ORM\Column(type="string", length=30)
*/
 	protected $nombre;

 /**
* @ORM\Column(type="integer")
*/

    protected $distro_cantidad;

/**
* @ORM\Column(type="string", length=100)
*/
 	protected $logo;




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
     * Set nombre
     *
     * @param string $nombre
     * @return Distros
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set distro_cantidad
     *
     * @param integer $distroCantidad
     * @return Distros
     */
    public function setDistroCantidad($distroCantidad)
    {
        $this->distro_cantidad = $distroCantidad;

        return $this;
    }

    /**
     * Get distro_cantidad
     *
     * @return integer
     */
    public function getDistroCantidad()
    {
        return $this->distro_cantidad;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Distros
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    public function __toString()
    {
        return sprintf('%s ', $this->nombre);
    }


}
