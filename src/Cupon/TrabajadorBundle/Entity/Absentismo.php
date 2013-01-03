<?php

namespace Cupon\TrabajadorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\ContratoBundle\Util\Util;
/**
 * Cupon\TrabajadorBundle\Entity\Absentismo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Absentismo
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
     * @var string $tipo
     *
     * @ORM\Column(name="tipo", type="string", length=25)
     */
    private $tipo;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=25)
     */
    private $slug;

    /**
     * @var float $max
     *
     * @ORM\Column(name="max", type="decimal")
     */
    private $max;

    /**
     * @var \DateTime $fechaini
     *
     * @ORM\Column(name="fechaini", type="datetime")
     */
    private $fechaini;

    /**
     * @var \DateTime $fechafin
     *
     * @ORM\Column(name="fechafin", type="datetime")
     */
    private $fechafin;


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
     * Set tipo
     *
     * @param string $tipo
     * @return Absentismo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        $this->slug = Util::getSlug($tipo);        
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Absentismo
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
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
     * Set max
     *
     * @param float $max
     * @return Absentismo
     */
    public function setMax($max)
    {
        $this->max = $max;
    
        return $this;
    }

    /**
     * Get max
     *
     * @return float 
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set fechaini
     *
     * @param \DateTime $fechaini
     * @return Absentismo
     */
    public function setFechaini($fechaini)
    {
        $this->fechaini = $fechaini;
    
        return $this;
    }

    /**
     * Get fechaini
     *
     * @return \DateTime 
     */
    public function getFechaini()
    {
        return $this->fechaini;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return Absentismo
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;
    
        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    public function __toString()
    {
        return $this->getTipo();
    }

    public function __construct() {
        $this->fechaini = new \DateTime();
        $this->fechafin = new \DateTime('9999-12-31');
    }
}