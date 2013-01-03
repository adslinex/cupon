<?php

namespace Cupon\ContratoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\ContratoBundle\Util\Util;
/**
 * Cupon\ContratoBundle\Entity\Contrato
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contrato
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
     * @var string $trabajador
     *
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
    private $fechaini;

    /**
     * @var \DateTime $fechafin
     *
     * @ORM\Column(name="fechafin", type="datetime")
     */
    private $fechafin;

    /**
     * @var string $posicion
     *
     * @ORM\Column(name="posicion", type="string", length=8, nullable=true)
     */
    private $posicion;

    /**
     * @var string $categoria
     *
     * @ORM\ManyToOne(targetEntity="Cupon\ContratoBundle\Entity\Categoria")
     */
    private $categoria;

    /**
     * @var integer $porciento
     *
     * @ORM\Column(name="porciento", type="integer", options={"default" = 100})
     */
    private $porciento;

    /**
     * @var string $tipo
     *
     * @ORM\Column(name="tipo", type="string", length=25, nullable=true)
     */
    private $tipo;


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
     * Set trabajador
     *
     * @param string $trabajador
     * @return Contrato
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
     * @return Contrato
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
     * @return Contrato
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
     * Set posicion
     *
     * @param string $posicion
     * @return Contrato
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;
    
        return $this;
    }

    /**
     * Get posicion
     *
     * @return string 
     */
    public function getPosicion()
    {
        return $this->posicion;
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
     * Set porciento
     *
     * @param integer $porciento
     * @return Contrato
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

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Contrato
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
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

/**    public function __construct()
  *  {
  *      this->fechaini = new \DateTime();
  *  }
*/

    /**
     * Set slug
     *
     * @param string $slug
     * @return Contrato
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
     * @return Contrato
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