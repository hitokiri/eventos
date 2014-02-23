<?php

namespace Acme\EventosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 */
class Usuarios{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $apellidos;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $dui;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $edad;

    /**
     * @ORM\Column(type="text")
     */
    protected $distros;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $comunidad;


}
