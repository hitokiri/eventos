<?php

namespace Acme\EventosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="usuario")
*/

class Usuarios{

/**
* @ORM\Column(type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
 	protected $id;

/**
* @ORM\Column(type="string", length=40)
*/
 	protected $nombre;

/**
* @ORM\Column(type="string", length=40)
*/

 	protected $apellidos;

/**
* @ORM\Column(type="string", length=3)
*/

    protected $sexo;

/**
* @ORM\Column(type="string", length=60)
*/

 	protected $mail;

/**
* @ORM\Column(type="string", length=15)
*/

	 protected $telefono;

/**
* @ORM\Column(type="integer")
*/

 	protected $dui;

/**
* @ORM\Column(type="string", length=50)
*/

 	protected $comunidad;

/**
* @ORM\Column(type="text")
*/
    protected $direccion;

/**
* @ORM\Column(type="string", length=100)
*/
    protected $imagen;

/**
 * @ORM\ManyToOne(targetEntity="Distros", inversedBy="usuarios")
 * @ORM\JoinColumn(name="distro_id", referencedColumnName="id")
 */
    protected $distros;

/**
* @ORM\Column(type="integer")
*/

    protected $distro_cantidad;



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
     * @return Usuarios
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuarios
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Usuarios
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Usuarios
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuarios
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set dui
     *
     * @param integer $dui
     * @return Usuarios
     */
    public function setDui($dui)
    {
        $this->dui = $dui;

        return $this;
    }

    /**
     * Get dui
     *
     * @return integer 
     */
    public function getDui()
    {
        return $this->dui;
    }

    /**
     * Set comunidad
     *
     * @param string $comunidad
     * @return Usuarios
     */
    public function setComunidad($comunidad)
    {
        $this->comunidad = $comunidad;

        return $this;
    }

    /**
     * Get comunidad
     *
     * @return string 
     */
    public function getComunidad()
    {
        return $this->comunidad;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Usuarios
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Usuarios
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set distro_cantidad
     *
     * @param integer $distroCantidad
     * @return Usuarios
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
     * Set distros
     *
     * @param \Acme\EventosBundle\Entity\Distros $distros
     * @return Usuarios
     */
    public function setDistros(\Acme\EventosBundle\Entity\Distros $distros = null)
    {
        $this->distros = $distros;

        return $this;
    }

    /**
     * Get distros
     *
     * @return \Acme\EventosBundle\Entity\Distros 
     */
    public function getDistros()
    {
        return $this->distros;
    }
}
