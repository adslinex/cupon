<?php
// src/Planilla/ServicioBundle/DataFixtures/ORM/Centros.php
namespace Planilla\ServicioBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Planilla\ServicioBundle\Entity\Centro;

class Centros implements FixtureInterface
{
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
$manager->persist($entidad);
}
$manager->flush();
}
}
