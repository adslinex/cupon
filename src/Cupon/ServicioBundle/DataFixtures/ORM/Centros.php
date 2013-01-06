<?php
// src/Cupon/ServicioBundle/DataFixtures/ORM/Centros.php
namespace Cupon\ServicioBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\ServicioBundle\Entity\Centro;

class Centros extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 20;
    }

    public function load(ObjectManager $manager)
    {
        $Centros = array(
        array('nombre' => 'Hospital de Llerena'),
        array('nombre' => 'Hospital de Zafra'),
        // ...
        );
        foreach ($Centros as $Centro) {
            $entidad = new Centro();
            $entidad->setNombre($Centro['nombre']);
            $entidad->setFechaini(new \DateTime(2001-01-01));
            $entidad->setFechafin(new \DateTime(9999-12-31));

            $manager->persist($entidad);
        }
        $manager->flush();
    }
}
