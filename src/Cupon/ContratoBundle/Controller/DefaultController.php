<?php

namespace Cupon\ContratoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ContratoBundle:Default:index.html.twig', array('name' => $name));
    }
}
