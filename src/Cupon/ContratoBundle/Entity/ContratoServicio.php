<?php

namespace Cupon\ContratoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\ContratoBundle\Util\Util;
/**
 * Cupon\ContratoBundle\Entity\ContratoServicio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ContratoServicio
{
    /**
     * @var string $trabajador
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Cupon\TrabajadorBundle\Entity\Trabajador")
     */
    protected $trabajador;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=100)
     */
    private $slug;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime $fechaini
     *
     * @ORM\Column(name="fechaini", type="datetime")
     */

    /**
     * @var \DateTime $fechaini
     * @ORM\Id
     * @ORM\Column(name="fechaini", type="datetime")
     */
    private $fechaini;

    /**
     * @var \DateTime $fechafin
     * @ORM\Id
     * @ORM\Column(name="fechafin", type="datetime")
     */
    private $fechafin;

    /**
     * @var string $servicio
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Cupon\ServicioBundle\Entity\Servicio")
     */
    protected $servicio;

    /**
     * @var string $categoria
     *
     * @ORM\ManyToOne(targetEntity="Cupon\ContratoBundle\Entity\Categoria")
     */
    private $categoria;

    /**
     * @var string $contrato
     *
     * @ORM\ManyToOne(targetEntity="Cupon\ContratoBundle\Entity\Contrato")
     */
    private $contrato;

    /**
     * @var integer $porciento
     *
     * @ORM\Column(name="porciento", type="integer")
     */
    private $porciento;

    /**
     * Set trabajador
     *
     * @param string $trabajador
     * @return ContratoServicio
     */
    public function setTrabajador(\Cupon\TrabajadorBundle\Entity\Trabajador $trabajador)
    {
        $this->trabajador = $trabajador;
        $this->slug = Util::getSlug($trabajador);
    
        return $this;
    }

    /**
     * Get trabajador
     *
     * @return string 
     */
    public function getTrabajador()
    {
        return $this->trabajador;
    }

    /**
     * Set fechaini
     *
     * @param \DateTime $fechaini
     * @return ContratoServicio
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
     * @return ContratoServicio
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
     * @param string $servicio
     * @return ContratoServicio
     */
    public function setServicio(\Cupon\ServicioBundle\Entity\Servicio $servicio)
    {
        $this->servicio = $servicio;
    
        return $this;
    }

    /**
     * Get servicio
     *
     * @return string 
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return ContratoServicio
     */
    public function setCategoria(\Cupon\ContratoBundle\Entity\Categoria $categoria)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     * @return ContratoServicio
     */
    public function setContrato(\Cupon\ContratoBundle\Entity\Contrato $contrato)
    {
        $this->contrato = $contrato;
    
        return $this;
    }

    /**
     * Get contrato
     *
     * @return string 
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set porciento
     *
     * @param integer $porciento
     * @return ContratoServicio
     */
    public function setPorciento($porciento)
    {
        $this->porciento = $porciento;
    
        return $this;
    }

    /**
     * Get porciento
     *
     * @return integer 
     */
    public function getPorciento()
    {
        return $this->porciento;
    }


  /**  public function __construct()
    *{
    *    this->fechaini = new \DateTime();
    *}
*/

    /**
     * Set slug
     *
     * @param string $slug
     * @return ContratoServicio
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
     * @return ContratoServicio
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
    
    public function __construct() {
        $this->fechaini = new \DateTime();
        $this->fechafin = new \DateTime('9999-12-31');
        $this->porciento = 100;
    }
}