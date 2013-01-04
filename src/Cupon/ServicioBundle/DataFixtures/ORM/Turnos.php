<?php
// src/Cupon/ServicioBundle/DataFixtures/ORM/Turnos.php
namespace Cupon\ServicioBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\ServicioBundle\Entity\Turno;

class Turnos extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 40;
    }
public function load(ObjectManager $manager)
    {
    $Turnos = array(
        array('turno' => 'M', 'descripcion' => 'Turno de mañana', 'horasdia' => 7, 'horasnoche' => 0),
        array('turno' => 'T', 'descripcion' => 'Turno de tarde', 'horasdia' => 7, 'horasnoche' => 0),
        array('turno' => 'X', 'descripcion' => 'Turno de noche', 'horasdia' => 2, 'horasnoche' => 8),
    // ...
    );
    foreach ($Turnos as $Turno) {
        $entidad = new Turno();
        $entidad->setTurno($Turno['turno']);
        $entidad->setDescripcion($Turno['descripcion']);
        $entidad->setHorasdia($Turno['horasdia']);
        $entidad->setHorasnoche($Turno['horasnoche']);
        $entidad->setFechaini(new \DateTime(2001-01-01));
        $entidad->setFechafin(new \DateTime(9999-12-31));
        $manager->persist($entidad);
    }
    $manager->flush();
    }
}