<?php
// src/Planilla/ContratoBundle/DataFixtures/ORM/Contratos.php
namespace Planilla\ContratoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Cupon\ContratoBundle\Entity\Contrato;
use Cupon\ContratoBundle\Entity\Categoria;
use Cupon\TrabajadorBundle\Entity\Trabajador;
class Contratos extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 60;
    }
    
    public function load(ObjectManager $manager)
    {
        // Obtener todas las categorias y trabajadores de la base de datos
        $categorias = $manager->getRepository('ContratoBundle:Categoria')->findAll();
        $trabajadores = $manager->getRepository('TrabajadorBundle:Trabajador')->findAll();
        
        foreach ($trabajadores as $trabajador) {
            $contrato = new Contrato();
            $fechainicio = new \DateTime('now - '.rand(0,365).' days');
            $fechafinal = new \DateTime('now + '.rand(0,365).' days');
            $contrato->setFechaini($fechainicio);
            $contrato->setFechafin($fechafinal);
            $contrato->setTrabajador($trabajador);
            $contrato->setCategoria(array_rand($categorias));
            $contrato->setPorciento(100);
            
            $manager->persist($contrato);
        }
        $manager->flush();
    }
}