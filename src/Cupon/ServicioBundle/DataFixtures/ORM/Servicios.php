<?php
// src/Cupon/ServicioBundle/DataFixtures/ORM/Servicios.php
namespace Cupon\ServicioBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Cupon\ServicioBundle\Entity\Servicio;
use Cupon\ContratoBundle\Entity\Centro;

class Servicios extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 70;
    }
public function load(ObjectManager $manager)
        {
        // Obtener todas las centros de la base de datos
        $centros = $manager->getRepository('ServicioBundle:Centro')->findAll();
        $Servicios = array(
        array('nombre' => 'URG'),
        array('nombre' => 'MINT'),
        // ...
        );
        
        foreach ($centros as $centro) {

            foreach ($Servicios as $Servicio) {
                $entidad = new Servicio();
                $entidad->setNombre($Servicio['nombre']);
                $entidad->setCentro($centro);
                //$entidad->setsetFechaini(new \DateTime(2001-01-01));
                //$entidad->setFechafin(new \DateTime(9999-12-31));
                $manager->persist($entidad);
            }
            $manager->flush();
        }
}
}
