<?php

namespace CAII\MiembroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\MiembroBundle\Entity\Ocupacion;
use CAII\MiembroBundle\Form\OcupacionType;

/**
 * Ocupacion controller.
 *
 * @Route("/ocupacion")
 */
class OcupacionController extends Controller
{

    /**
     * Lists all Ocupacion entities.
     *
     * @Route("/", name="ocupacion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MiembroBundle:Ocupacion')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Ocupacion entity.
     *
     * @Route("/", name="ocupacion_create")
     * @Method("POST")
     * @Template("MiembroBundle:Ocupacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Ocupacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ocupacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Ocupacion entity.
    *
    * @param Ocupacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Ocupacion $entity)
    {
        $form = $this->createForm(new OcupacionType(), $entity, array(
            'action' => $this->generateUrl('ocupacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ocupacion entity.
     *
     * @Route("/new", name="ocupacion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Ocupacion();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Ocupacion entity.
     *
     * @Route("/{id}", name="ocupacion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:Ocupacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ocupacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Ocupacion entity.
     *
     * @Route("/{id}/edit", name="ocupacion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:Ocupacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ocupacion entity.');
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
    * Creates a form to edit a Ocupacion entity.
    *
    * @param Ocupacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ocupacion $entity)
    {
        $form = $this->createForm(new OcupacionType(), $entity, array(
            'action' => $this->generateUrl('ocupacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ocupacion entity.
     *
     * @Route("/{id}", name="ocupacion_update")
     * @Method("PUT")
     * @Template("MiembroBundle:Ocupacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:Ocupacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ocupacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ocupacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Ocupacion entity.
     *
     * @Route("/{id}", name="ocupacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MiembroBundle:Ocupacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ocupacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ocupacion'));
    }

    /**
     * Creates a form to delete a Ocupacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ocupacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
