<?php

namespace CAII\MiembroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\MiembroBundle\Entity\MiembroPublicacion;
use CAII\MiembroBundle\Form\MiembroPublicacionType;

/**
 * MiembroPublicacion controller.
 *
 * @Route("/miembropublicacion")
 */
class MiembroPublicacionController extends Controller
{

    /**
     * Lists all MiembroPublicacion entities.
     *
     * @Route("/", name="miembropublicacion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MiembroBundle:MiembroPublicacion')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new MiembroPublicacion entity.
     *
     * @Route("/", name="miembropublicacion_create")
     * @Method("POST")
     * @Template("MiembroBundle:MiembroPublicacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new MiembroPublicacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('miembropublicacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a MiembroPublicacion entity.
     *
     * @param MiembroPublicacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MiembroPublicacion $entity)
    {
        $form = $this->createForm(new MiembroPublicacionType(), $entity, array(
            'action' => $this->generateUrl('miembropublicacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new MiembroPublicacion entity.
     *
     * @Route("/new", name="miembropublicacion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction($id)
    {
        $entity = new MiembroPublicacion();
        $form   = $this->createForm(new MiembroPublicacionType(),$entity);


        $form->handleRequest($this->getRequest());
        $em = $this->getDoctrine()->getManager();

        if ($form->isValid()) {
            $entity->setIdPublicacion($em->getRepository('PublicacionesBundle:Publicacion')->find($id));
            $em = $this->getDoctrine()->getManager();
            $errors = $this->get('validator')->validate($entity);
            if (count($errors) === 0) {
                $em->persist($entity);
                $em->flush();
            }
            //Imprime los errores en pantalla
            //var_dump($errors);
            
            return $this->redirect($this->generateUrl('Publicacion_miembros', array('id' => $id)));
        }





        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a MiembroPublicacion entity.
     *
     * @Route("/{id}", name="miembropublicacion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:MiembroPublicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MiembroPublicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing MiembroPublicacion entity.
     *
     * @Route("/{id}/edit", name="miembropublicacion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:MiembroPublicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MiembroPublicacion entity.');
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
    * Creates a form to edit a MiembroPublicacion entity.
    *
    * @param MiembroPublicacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MiembroPublicacion $entity)
    {
        $form = $this->createForm(new MiembroPublicacionType(), $entity, array(
            'action' => $this->generateUrl('miembropublicacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing MiembroPublicacion entity.
     *
     * @Route("/{id}", name="miembropublicacion_update")
     * @Method("PUT")
     * @Template("MiembroBundle:MiembroPublicacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:MiembroPublicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MiembroPublicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('miembropublicacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a MiembroPublicacion entity.
     *
     * @Route("/{id}", name="miembropublicacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction($idp, $idm)
    {
        $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MiembroBundle:MiembroPublicacion')->find($idm);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Miembro entity.');
            }

            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('Publicacion_miembros', array('id' => $idp)));
    }

    /**
     * Creates a form to delete a MiembroPublicacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('miembropublicacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
