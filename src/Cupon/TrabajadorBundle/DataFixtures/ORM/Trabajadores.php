<?php
// src/Planilla/TrabajadorBundle/DataFixtures/ORM/Trabajadores

namespace Cupon\TrabajadorBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
//use Cupon\CiudadBundle\Entity\Ciudad;
use Cupon\TrabajadorBundle\Entity\Trabajador;

/**
 * Fixtures de la entidad Trabajador.
 * Crea 500 trabajadors de prueba con información muy realista.
 */
class Trabajadores extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    public function getOrder()
    {
        return 10;
    }

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        // Obtener todas las ciudades de la base de datos
       // $ciudades = $manager->getRepository('CiudadBundle:Ciudad')->findAll();
        $ciudades = array('Llerena', 'Zafra', 'Los Santos', 'Valverde', 'Azuaga', 'Reina', 'Burguillos', 'Fte Cantos');

        for ($i=1; $i<=500; $i++) {
            $trabajador = new Trabajador();

            $trabajador->setNombre($this->getNombre());
            $trabajador->setApellido1($this->getApellido());
            $trabajador->setApellido2($this->getApellido());
            $trabajador->setUsuario('trabajador'.$i.'@localhost');
            $trabajador->setTelefono(substr(rand(), 0, 9));

           // $trabajador->setSalt(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36));

           $passwordEnClaro = 'trabajador'.$i;
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($trabajador);
            $passwordCodificado = $encoder->encodePassword($passwordEnClaro, 'trabajador');
            $trabajador->setPassword($passwordCodificado);

            $ciudad = $ciudades[array_rand($ciudades)];
            $trabajador->setLocalidad($this->getDireccion($ciudad));
            //$trabajador->setLocalidad($ciudad);

            // El 60% de los trabajadors permite email
            $trabajador->setNumEmpleado(substr(rand(), 0, 6));

            $trabajador->setFechaini(new \DateTime('now - '.rand(1, 150).' days'));
            $trabajador->setFechafin(new \DateTime(9999-12-31));
            $trabajador->setFechaNacimiento(new \DateTime('now - '.rand(7000, 20000).' days'));
            $dni = substr(rand(), 0, 8);
            $trabajador->setDni($dni.substr("TRWAGMYFPDXBNJZSQVHLCKE", strtr($dni, "XYZ", "012")%23, 1));

            //$trabajador->setNumeroTarjeta('1234567890123456');

            $manager->persist($trabajador);
        }

        $manager->flush();
    }

    /**
     * Generador aleatorio de nombres de personas.
     * Aproximadamente genera un 50% de hombres y un 50% de mujeres.
     *
     * @return string Nombre aleatorio generado para el trabajador.
     */
    private function getNombre()
    {
        // Los nombres más populares en España según el INE
        // Fuente: http://www.ine.es/daco/daco42/nombyapel/nombyapel.htm

        $hombres = array(
            'Antonio', 'José', 'Manuel', 'Francisco', 'Juan', 'David',
            'José Antonio', 'José Luis', 'Jesús', 'Javier', 'Francisco Javier',
            'Carlos', 'Daniel', 'Miguel', 'Rafael', 'Pedro', 'José Manuel',
            'Ángel', 'Alejandro', 'Miguel Ángel', 'José María', 'Fernando',
            'Luis', 'Sergio', 'Pablo', 'Jorge', 'Alberto'
        );
        $mujeres = array(
            'María Carmen', 'María', 'Carmen', 'Josefa', 'Isabel', 'Ana María',
            'María Dolores', 'María Pilar', 'María Teresa', 'Ana', 'Francisca',
            'Laura', 'Antonia', 'Dolores', 'María Angeles', 'Cristina', 'Marta',
            'María José', 'María Isabel', 'Pilar', 'María Luisa', 'Concepción',
            'Lucía', 'Mercedes', 'Manuela', 'Elena', 'Rosa María'
        );

        if (rand() % 2) {
            return $hombres[array_rand($hombres)];
        } else {
            return $mujeres[array_rand($mujeres)];
        }
    }

    /**
     * Generador aleatorio de apellidos de personas.
     *
     * @return string Apellido aleatorio generado para el trabajador.
     */
    private function getApellido()
    {
        // Los apellidos más populares en España según el INE
        // Fuente: http://www.ine.es/daco/daco42/nombyapel/nombyapel.htm

        $apellidos = array(
            'García', 'González', 'Rodríguez', 'Fernández', 'López', 'Martínez',
            'Sánchez', 'Pérez', 'Gómez', 'Martín', 'Jiménez', 'Ruiz',
            'Hernández', 'Díaz', 'Moreno', 'Álvarez', 'Muñoz', 'Romero',
            'Alonso', 'Gutiérrez', 'Navarro', 'Torres', 'Domínguez', 'Vázquez',
            'Ramos', 'Gil', 'Ramírez', 'Serrano', 'Blanco', 'Suárez', 'Molina',
            'Morales', 'Ortega', 'Delgado', 'Castro', 'Ortíz', 'Rubio', 'Marín',
            'Sanz', 'Iglesias', 'Nuñez', 'Medina', 'Garrido'
        );

        return $apellidos[array_rand($apellidos)].' '.$apellidos[array_rand($apellidos)];
    }

    /**
     * Generador aleatorio de direcciones postales.
     *
     * @param  Ciudad $ciudad Objeto de la ciudad para la que se genera una dirección postal.
     * @return string         Dirección postal aleatoria generada para la tienda.
     */
    private function getDireccion(Ciudad $ciudad)
    {
        $prefijos = array('Calle', 'Avenida de', 'Plaza de');
        $nombres = array(
            'Real', 'España', 'Regina', 'Corredera', 'Aurora',
            'San Juan', 'San Antonio', 'San Antón', 'Quemados', 'Nazaré',
            'Pizarra', 'Toledillo', 'Ancha'
        );

        return $prefijos[array_rand($prefijos)].' '.$nombres[array_rand($nombres)].', '.rand(1, 100)."\n"
               .$this->getCodigoPostal().' '.$ciudad->getNombre();
    }

    /**
     * Generador aleatorio de códigos postales
     *
     * @return string Código postal aleatorio generado para la tienda.
     */
    private function getCodigoPostal()
    {
        return sprintf('%02s%03s', rand(1, 52), rand(0, 999));
    }
}