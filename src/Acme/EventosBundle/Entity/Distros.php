<?php

namespace Acme\EventosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
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

    protected $distrocantidad;

/**
* @ORM\Column(type="string", length=100, nullable=true)
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
     * Set distrocantidad
     *
     * @param integer $distrocantidad
     * @return Distros
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
}
