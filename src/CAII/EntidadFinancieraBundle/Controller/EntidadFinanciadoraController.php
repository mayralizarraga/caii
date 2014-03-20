<?php

namespace CAII\EntidadFinancieraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\EntidadFinancieraBundle\Entity\EntidadFinanciadora;
use CAII\EntidadFinancieraBundle\Form\EntidadFinanciadoraType;

/**
 * EntidadFinanciadora controller.
 *
 * @Route("/entidadfinanciadora")
 */
class EntidadFinanciadoraController extends Controller
{

    /**
     * Lists all EntidadFinanciadora entities.
     *
     * @Route("/", name="entidadfinanciadora")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EntidadFinancieraBundle:EntidadFinanciadora')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new EntidadFinanciadora entity.
     *
     * @Route("/", name="entidadfinanciadora_create")
     * @Method("POST")
     * @Template("EntidadFinancieraBundle:EntidadFinanciadora:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new EntidadFinanciadora();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entidadfinanciadora_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a EntidadFinanciadora entity.
    *
    * @param EntidadFinanciadora $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(EntidadFinanciadora $entity)
    {
        $form = $this->createForm(new EntidadFinanciadoraType(), $entity, array(
            'action' => $this->generateUrl('entidadfinanciadora_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new EntidadFinanciadora entity.
     *
     * @Route("/new", name="entidadfinanciadora_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new EntidadFinanciadora();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a EntidadFinanciadora entity.
     *
     * @Route("/{id}", name="entidadfinanciadora_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadFinancieraBundle:EntidadFinanciadora')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EntidadFinanciadora entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing EntidadFinanciadora entity.
     *
     * @Route("/{id}/edit", name="entidadfinanciadora_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadFinancieraBundle:EntidadFinanciadora')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EntidadFinanciadora entity.');
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
    * Creates a form to edit a EntidadFinanciadora entity.
    *
    * @param EntidadFinanciadora $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EntidadFinanciadora $entity)
    {
        $form = $this->createForm(new EntidadFinanciadoraType(), $entity, array(
            'action' => $this->generateUrl('entidadfinanciadora_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing EntidadFinanciadora entity.
     *
     * @Route("/{id}", name="entidadfinanciadora_update")
     * @Method("PUT")
     * @Template("EntidadFinancieraBundle:EntidadFinanciadora:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadFinancieraBundle:EntidadFinanciadora')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EntidadFinanciadora entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('entidadfinanciadora_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a EntidadFinanciadora entity.
     *
     * @Route("/{id}", name="entidadfinanciadora_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EntidadFinancieraBundle:EntidadFinanciadora')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EntidadFinanciadora entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('entidadfinanciadora'));
    }

    /**
     * Creates a form to delete a EntidadFinanciadora entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('entidadfinanciadora_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
