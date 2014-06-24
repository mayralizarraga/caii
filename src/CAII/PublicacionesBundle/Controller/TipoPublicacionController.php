<?php

namespace CAII\PublicacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\PublicacionesBundle\Entity\TipoPublicacion;
use CAII\PublicacionesBundle\Form\TipoPublicacionType;

/**
 * TipoPublicacion controller.
 *
 * @Route("/TipoPublicacion")
 */
class TipoPublicacionController extends Controller
{

    /**
     * Lists all TipoPublicacion entities.
     *
     * @Route("/", name="TipoPublicacion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PublicacionesBundle:TipoPublicacion')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new TipoPublicacion entity.
     *
     * @Route("/", name="TipoPublicacion_create")
     * @Method("POST")
     * @Template("PublicacionesBundle:TipoPublicacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new TipoPublicacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('TipoPublicacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a TipoPublicacion entity.
    *
    * @param TipoPublicacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TipoPublicacion $entity)
    {
        $form = $this->createForm(new TipoPublicacionType(), $entity, array(
            'action' => $this->generateUrl('TipoPublicacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoPublicacion entity.
     *
     * @Route("/new", name="TipoPublicacion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TipoPublicacion();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a TipoPublicacion entity.
     *
     * @Route("/{id}", name="TipoPublicacion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PublicacionesBundle:TipoPublicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPublicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TipoPublicacion entity.
     *
     * @Route("/{id}/edit", name="TipoPublicacion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PublicacionesBundle:TipoPublicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPublicacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a TipoPublicacion entity.
    *
    * @param TipoPublicacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoPublicacion $entity)
    {
        $form = $this->createForm(new TipoPublicacionType(), $entity, array(
            'action' => $this->generateUrl('TipoPublicacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoPublicacion entity.
     *
     * @Route("/{id}", name="TipoPublicacion_update")
     * @Method("PUT")
     * @Template("PublicacionesBundle:TipoPublicacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PublicacionesBundle:TipoPublicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoPublicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('TipoPublicacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a TipoPublicacion entity.
     *
     * @Route("/{id}", name="TipoPublicacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PublicacionesBundle:TipoPublicacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoPublicacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        

        return $this->redirect($this->generateUrl('TipoPublicacion'));
    }

    /**
     * Creates a form to delete a TipoPublicacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('TipoPublicacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
