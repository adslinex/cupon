<?php
// src/Planilla/ServicioBundle/DataFixtures/ORM/Turnos.php
namespace Planilla\ServicioBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Planilla\ServicioBundle\Entity\Turno;

class Turnos implements FixtureInterface
{
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
        $manager->persist($entidad);
    }
    $manager->flush();
    }
}