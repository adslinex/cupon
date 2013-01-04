<?php
// src/Planilla/ContratoBundle/DataFixtures/ORM/Categorias.php
namespace Planilla\ContratoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\ContratoBundle\Entity\Categoria;

class Categorias extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 30;
    }
public function load(ObjectManager $manager)
{
$Categorias = array(
array('nombre' => 'Enfermero'),
array('nombre' => 'Aux. Enfereria', 'descripcion' => 'Tecnico Sanitario'),
// ...
);
foreach ($Categorias as $Categoria) {
$entidad = new Categoria();
$entidad->setNombre($Categoria['nombre']);
            $entidad->setFechaini(new \DateTime('now - '.rand(1, 150).' days'));
            $entidad->setFechafin(new \DateTime(9999-12-31));
$manager->persist($entidad);
}
$manager->flush();
}
}



