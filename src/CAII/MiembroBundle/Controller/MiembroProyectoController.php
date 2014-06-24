<?php

namespace CAII\MiembroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\MiembroBundle\Entity\MiembroProyecto;
use CAII\MiembroBundle\Form\MiembroProyectoType;

/**
 * MiembroProyecto controller.
 *
 * @Route("/miembroproyecto")
 */
class MiembroProyectoController extends Controller
{

    /**
     * Lists all MiembroProyecto entities.
     *
     * @Route("/", name="miembroproyecto")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MiembroBundle:MiembroProyecto')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new MiembroProyecto entity.
     *
     * @Route("/", name="miembroproyecto_create")
     * @Method("POST")
     * @Template("MiembroBundle:MiembroProyecto:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new MiembroProyecto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('miembroproyecto_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a MiembroProyecto entity.
    *
    * @param MiembroProyecto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(MiembroProyecto $entity)
    {
        $form = $this->createForm(new MiembroProyectoType(), $entity, array(
            'action' => $this->generateUrl('miembroproyecto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new MiembroProyecto entity.
     *
     * @Route("/new", name="miembroproyecto_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new MiembroProyecto();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a MiembroProyecto entity.
     *
     * @Route("/{id}", name="miembroproyecto_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:MiembroProyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MiembroProyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing MiembroProyecto entity.
     *
     * @Route("/{id}/edit", name="miembroproyecto_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:MiembroProyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MiembroProyecto entity.');
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
    * Creates a form to edit a MiembroProyecto entity.
    *
    * @param MiembroProyecto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MiembroProyecto $entity)
    {
        $form = $this->createForm(new MiembroProyectoType(), $entity, array(
            'action' => $this->generateUrl('miembroproyecto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing MiembroProyecto entity.
     *
     * @Route("/{id}", name="miembroproyecto_update")
     * @Method("PUT")
     * @Template("MiembroBundle:MiembroProyecto:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:MiembroProyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MiembroProyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('miembroproyecto_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a MiembroProyecto entity.
     *
     * @Route("/{id}", name="miembroproyecto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MiembroBundle:MiembroProyecto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MiembroProyecto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('miembroproyecto'));
    }

    /**
     * Creates a form to delete a MiembroProyecto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('miembroproyecto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
