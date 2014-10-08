<?php

namespace CAII\PortadaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PortadaBundle:Slide')->findAll();

        //return $this->render('PortadaBundle:Default:inicio.html.twig');
        
        $content = $this->renderView('PortadaBundle:Default:inicio.html.twig',
        array(
            'entities' => $entities,
        ));

    	return new Response($content);
    }
}
