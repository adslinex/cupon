<?php

namespace Cupon\ServicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\ContratoBundle\Util\Util;
/**
 * Cupon\ServicioBundle\Entity\TurnoServicio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TurnoServicio
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
     * @var string $turnoServicio
     *
     * @ORM\Column(name="turno", type="string", length=5)
     */
    private $turnoServicio;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=5)
     */
    private $slug;

    /**
     * @var string $servicio
     *
     * @ORM\ManyToOne(targetEntity="Cupon\ServicioBundle\Entity\Servicio")
     */
    private $servicio;

    /**
     * @var string $categoria
     *
     * @ORM\ManyToOne(targetEntity="Cupon\ContratoBundle\Entity\Categoria")
     */
    private $categoria;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer $minimo
     *
     * @ORM\Column(name="minimo", type="integer")
     */
    private $minimo;

    /**
     * @var integer $laborable
     *
     * @ORM\Column(name="laborable", type="integer")
     */
    private $laborable;

    /**
     * @var integer $festivo
     *
     * @ORM\Column(name="festivo", type="integer")
     */
    private $festivo;

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
    public function setTurnoServicio($turnoServicio)
    {
        $this->turno = $turnoServicio;
        $this->slug = Util::getSlug($turnoServicio);
        return $this;
    }

    /**
     * Get turno
     *
     * @return string 
     */
    public function getTurnoServicio()
    {
        return $this->turnoServicio;
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
     * Set minimo
     *
     * @param integer $minimo
     * @return Turno
     */
    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;
    
        return $this;
    }

    /**
     * Get minimo
     *
     * @return integer 
     */
    public function getMinimo()
    {
        return $this->minimo;
    }

    /**
     * Set laborable
     *
     * @param integer $laborable
     * @return Turno
     */
    public function setLaborable($laborable)
    {
        $this->laborable = $laborable;
    
        return $this;
    }

    /**
     * Get laborable
     *
     * @return integer 
     */
    public function getLaborable()
    {
        return $this->laborable;
    }

    /**
     * Set festivo
     *
     * @param integer $festivo
     * @return Turno
     */
    public function setFestivo($festivo)
    {
        $this->festivo = $festivo;
    
        return $this;
    }

    /**
     * Get festivo
     *
     * @return integer 
     */
    public function getFestivo()
    {
        return $this->festivo;
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

    /**
     * Set servicio
     *
     * @param Cupon\ServicioBundle\Entity\Servicio $servicio
     * @return Turno
     */
    public function setServicio(\Cupon\ServicioBundle\Entity\Servicio $servicio = null)
    {
        $this->servicio = $servicio;
    
        return $this;
    }

    /**
     * Get servicio
     *
     * @return Cupon\ServicioBundle\Entity\Servicio 
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set categoria
     *
     * @param Planillla\ContratoBundle\Entity\Categoria $categoria
     * @return Turno
     */
    public function setCategoria(\Cupon\ContratoBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return Planillla\ContratoBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    
    public function __construct() {
        $this->fechaini = new \DateTime();
        $this->fechafin = new \DateTime('9999-12-31');
    }
}