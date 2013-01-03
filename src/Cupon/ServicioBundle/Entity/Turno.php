<?php

namespace Cupon\ServicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\ContratoBundle\Util\Util;
/**
 * Cupon\ServicioBundle\Entity\Turno
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Turno
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
     * @var string $turno
     *
     * @ORM\Column(name="turno", type="string", length=5)
     */
    private $turno;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=5)
     */
    private $slug;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;


    /**
     * @var float $horasdia
     *
     * @ORM\Column(name="horasdia", type="decimal")
     */
    private $horasdia;

    /**
     * @var float $horasnoche
     *
     * @ORM\Column(name="horasnoche", type="decimal")
     */
    private $horasnoche;

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
     * Set turno
     *
     * @param string $turno
     * @return Turno
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;
        $this->slug = Util::getSlug($turno);
        return $this;
    }

    /**
     * Get turno
     *
     * @return string 
     */
    public function getTurno()
    {
        return $this->turno;
    }


    /**
     * Set slug
     *
     * @param string $slug
     * @return Turno
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Turno
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set horasdia
     *
     * @param float $horasdia
     * @return Turno
     */
    public function setHorasdia($horasdia)
    {
        $this->horasdia = $horasdia;
    
        return $this;
    }

    /**
     * Get horasdia
     *
     * @return float 
     */
    public function getHorasdia()
    {
        return $this->horasdia;
    }

    /**
     * Set horasnoche
     *
     * @param float $horasnoche
     * @return Turno
     */
    public function setHorasnoche($horasnoche)
    {
        $this->horasnoche = $horasnoche;
    
        return $this;
    }

    /**
     * Get horasnoche
     *
     * @return float 
     */
    public function getHorasnoche()
    {
        return $this->horasnoche;
    }

    /**
     * Set fechaini
     *
     * @param \DateTime $fechaini
     * @return Turno
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
     * @return Turno
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
    
    public function __construct() {
        $this->fechaini = new \DateTime();
        $this->fechafin = new \DateTime('9999-12-31');
    }
}