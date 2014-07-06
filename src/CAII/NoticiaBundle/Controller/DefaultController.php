<?php

namespace CAII\NoticiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NoticiaBundle:Default:index.html.twig', array('name' => $name));
    }
}
