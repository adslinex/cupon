<?php

namespace Cupon\ServicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\ContratoBundle\Util\Util;
/**
 * Cupon\ServicioBundle\Entity\Servicio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Servicio
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=5)
     */
    private $nombre;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=5)
     */
    private $slug;

    /**
     * @var string $Descripcion
     *
     * @ORM\Column(name="Descripcion", type="string", length=100, nullable=true)
     */
    private $Descripcion;

    /**
     * @var string $Centro
     *
     * @ORM\ManyToOne(targetEntity="Cupon\ServicioBundle\Entity\Centro")
     */
    private $Centro;


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
     * @return Servicio
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->slug = Util::getSlug($nombre);    
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
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set Slug
     *
     * @param string $slug
     * @return Servicio
     */
    public function setSlug($slug)
    {
        $this->Slug = $slug;
    
        return $this;
    }



    /**
     * Set Descripcion
     *
     * @param string $descripcion
     * @return Servicio
     */
    public function setDescripcion($descripcion)
    {
        $this->Descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get Descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * Set Centro
     *
     * @param string $centro
     * @return Servicio
     */
    public function setCentro(\Cupon\ServicioBundle\Entity\Centro $centro)
    {
        $this->Centro = $centro;
    
        return $this;
    }

    /**
     * Get Centro
     *
     * @return string 
     */
    public function getCentro()
    {
        return $this->Centro;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
    
    public function __construct() {
        $this->fechaini = new \DateTime();
        $this->fechafin = new \DateTime('9999-12-31');
    }   
}