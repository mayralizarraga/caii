<?php

namespace CAII\MiembroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\MiembroBundle\Entity\Miembro;
use CAII\MiembroBundle\Form\MiembroType;

/**
 * Miembro controller.
 *
 * @Route("/miembro")
 */
class MiembroController extends Controller
{

    /**
     * Lists all Miembro entities.
     *
     * @Route("/", name="miembro")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

       // $entities = $em->getRepository('MiembroBundle:Miembro')->findAll();
        
        $dql = $em->createQueryBuilder();
        $dql->select('Miembro.fotoURL ,Miembro.link_Pagina ,Miembro.id , Miembro.nombre , Miembro.apellidoP , Miembro.apellidoM, Ocupacion.id ocupacion')
            ->from('MiembroBundle:Miembro', 'Miembro')
            ->Join('Miembro.idOcupacion', 'Ocupacion')
            ->where('Miembro.status=1');
        $entities =$dql->getQuery()->getResult();

        $ocupaciones2 = $em->getRepository('MiembroBundle:Ocupacion')->findAll();

        $dql = $em->createQueryBuilder();
        $dql->select('Ocupacion.id')
            ->from('MiembroBundle:Miembro', 'Miembro')
            ->Join('Miembro.idOcupacion', 'Ocupacion')
            ->where('Miembro.status=1')
            ->groupBy('Miembro.idOcupacion');

        $ocupaciones =$dql->getQuery()->getResult();

        return array(
            'entities' => $entities,
            'ocupaciones' => $ocupaciones,
            'ocupaciones2' => $ocupaciones2,         
             
        );
    }


    /**
     * Lists all Miembro entities.
     *
     * @Route("/", name="miembro_backend")
     * @Method("GET")
     * @Template("MiembroBundle:Miembro:indexBackend.html.twig")
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MiembroBundle:Miembro')->findAll();
        
       return array(
            'entities' => $entities,
            );
    }



    /**
     * Creates a new Miembro entity.
     *
     * @Route("/", name="miembro_create")
     * @Method("POST")
     * @Template("MiembroBundle:Miembro:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Miembro();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('miembro_backend', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Miembro entity.
    *
    * @param Miembro $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Miembro $entity)
    {
        $form = $this->createForm(new MiembroType(), $entity, array(
            'action' => $this->generateUrl('miembro_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Miembro entity.
     *
     * @Route("/new", name="miembro_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Miembro();
        //$form   = $this->createCreateForm($entity);


        $form   = $this->createForm(new MiembroType(), $entity);

        $form->handleRequest($this->getRequest());


        if ($form->isValid()) {
            $entity->subirFoto($this->container->getParameter('miembros.directorio.imagenes'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('miembro_backend', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Miembro entity.
     *
     * @Route("/{id}", name="miembro_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:Miembro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Miembro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Miembro entity.
     *
     * @Route("/{id}/edit", name="miembro_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:Miembro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Miembro entity.');
        }

        $form = $this->createForm(new MiembroType(), $entity, array(
            'action' => $this->generateUrl('miembro_edit', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->handleRequest($this->getRequest());

       if ($form->isValid()) {
            $entity->subirFoto($this->container->getParameter('miembros.directorio.imagenes'));
            $em->flush();

            return $this->redirect($this->generateUrl('miembro_backend'));
        }

        /*$editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);*/

        return array(
            'entity' => $entity, 
            'form' => $form->createView()
        );   
    }

    /**
    * Creates a form to edit a Miembro entity.
    *
    * @param Miembro $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Miembro $entity)
    {
        $form = $this->createForm(new MiembroType(), $entity, array(
            'action' => $this->generateUrl('miembro_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Miembro entity.
     *
     * @Route("/{id}", name="miembro_update")
     * @Method("PUT")
     * @Template("MiembroBundle:Miembro:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiembroBundle:Miembro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Miembro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('miembro_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Miembro entity.
     *
     * @Route("/{id}", name="miembro_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
       /* $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MiembroBundle:Miembro')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Miembro entity.');
            }

            $em->remove($entity);
            $em->flush();
        }*/

        $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MiembroBundle:Miembro')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Miembro entity.');
            }

            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('miembro_backend'));
    }

    /**
     * Creates a form to delete a Miembro entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('miembro_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
