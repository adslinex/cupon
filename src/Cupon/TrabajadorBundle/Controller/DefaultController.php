<?php

namespace Cupon\TrabajadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TrabajadorBundle:Default:index.html.twig', array('name' => $name));
    }
}
