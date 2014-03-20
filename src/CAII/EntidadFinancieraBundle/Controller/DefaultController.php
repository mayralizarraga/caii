<?php

namespace CAII\EntidadFinancieraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EntidadFinancieraBundle:Default:index.html.twig', array('name' => $name));
    }
}
