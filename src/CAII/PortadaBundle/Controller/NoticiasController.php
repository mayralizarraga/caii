<?php

namespace CAII\PortadaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NoticiasController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortadaBundle:Default:noticia.html.twig');
    }
}
