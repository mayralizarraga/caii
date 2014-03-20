<?php

namespace CAII\PortadaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortadaBundle:Default:inicio.html.twig');
    }
}
