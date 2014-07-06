<?php

namespace CAII\PortadaBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\PortadaBundle\Entity\Slide;

/**
 * Slide controller.
 *
 * @Route("/slide")
 */
class SlideController extends Controller
{

    /**
     * Lists all Slide entities.
     *
     * @Route("/", name="slide")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PortadaBundle:Slide')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Slide entity.
     *
     * @Route("/{id}", name="slide_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PortadaBundle:Slide')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Slide entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
