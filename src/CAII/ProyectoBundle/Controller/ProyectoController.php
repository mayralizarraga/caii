<?php

namespace CAII\ProyectoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\ProyectoBundle\Entity\Proyecto;
use CAII\ProyectoBundle\Form\ProyectoType;
use CAII\MiembroBundle\Entity\MiembroProyecto;
use CAII\MiembroBundle\Form\MiembroProyectoType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Proyecto controller.
 *
 * @Route("/proyecto")
 */
class ProyectoController extends Controller
{

    /**
     * Lists all Miembro entities.
     *
     * @Route("/", name="miembro_print")
     * @Method("GET")
     * @Template("MiembroBundle:Miembro:print.html.twig")
     */
    public function printAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProyectoBundle:Proyecto')->findAll();

        $html = $this->renderView('ProyectoBundle:Proyecto:print.html.twig', array(
          'entities' => $entities,
        ));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="proyecto.pdf"'
            )

        );
       
    }

    /**
     * Lists all Proyecto entities.
     *
     * @Route("/", name="proyecto")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProyectoBundle:Proyecto')->findAll();
        //$entities2 = $em->getRepository('MiembroBundle:MiembroProyecto')->findAll();
        $as = $em->getRepository('MiembroBundle:MiembroProyecto')->findMiembroProyecto();
        

        return array(
            'entities' => $entities,
            'mims' => $as,
           
        );
    }



    /**
     * Lists all projects entities.
     *
     * @Route("/", name="proyecto_backend")
     * @Method("GET")
     * @Template("ProyectoBundle:Proyecto:indexBackend.html.twig")
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProyectoBundle:Proyecto')->findAll();
        return array(
            'entities' => $entities,
                          
            
        );
    }
    


    /**
     * Creates a new Proyecto entity.
     *
     * @Route("/", name="proyecto_create")
     * @Method("POST")
     * @Template("ProyectoBundle:Proyecto:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Proyecto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('proyecto_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Proyecto entity.
    *
    * @param Proyecto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Proyecto $entity)
    {
        $form = $this->createForm(new ProyectoType(), $entity, array(
            'action' => $this->generateUrl('proyecto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Proyecto entity.
     *
     * @Route("/new", name="proyecto_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Proyecto();
        $form   = $this->createForm(new ProyectoType(), $entity);

        $form->handleRequest($this->getRequest());


        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('proyecto_backend', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Proyecto entity.
     *
     * @Route("/{id}", name="proyecto_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoBundle:Proyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }










    /**
     * Displays a form to edit an existing Proyecto entity.
     *
     * @Route("/{id}/edit", name="proyecto_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoBundle:Proyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proyecto entity.');
        }

        $form = $this->createForm(new ProyectoType(), $entity, array(
            'action' => $this->generateUrl('proyecto_edit', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->handleRequest($this->getRequest());

       if ($form->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('proyecto_backend'));
        }

        return array(
            'entity' => $entity, 
            'form' => $form->createView()
        );  
    }


    /**
     * Displays miembros-proyecto.
     *
     * @Route("/{id}/miembros", name="proyecto_miembros")
     * @Method("GET")
     * @Template("ProyectoBundle:Proyecto:miembros.html.twig")
     */
    public function proyectoMiembrosAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoBundle:Proyecto')->find($id);

        $dql = $em->createQueryBuilder();
 
        $dql->select('MiembroProyecto.id', 
                     'Miembro.nombre nombreMiembro, Miembro.id idmiembro, Miembro.apellidoP, Miembro.apellidoM', 
                     'Proyecto.nombre, Proyecto.id idproyecto')
            ->from('MiembroBundle:MiembroProyecto', 'MiembroProyecto')
            ->Join('MiembroProyecto.idMiembro', 'Miembro')
            ->Join('MiembroProyecto.idProyecto', 'Proyecto')
            ->where('Proyecto.id = :id_MiembroProyecto' );
        $dql->setParameter('id_MiembroProyecto', $id);

        $members = $dql->getQuery()->getResult();
     

        return array(
            'entity'      => $entity,
            'members'   => $members,
            
        );
    }



    /**
    * Creates a form to edit a Proyecto entity.
    *
    * @param Proyecto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Proyecto $entity)
    {
        $form = $this->createForm(new ProyectoType(), $entity, array(
            'action' => $this->generateUrl('proyecto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Proyecto entity.
     *
     * @Route("/{id}", name="proyecto_update")
     * @Method("PUT")
     * @Template("ProyectoBundle:Proyecto:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoBundle:Proyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('proyecto_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Proyecto entity.
     *
     * @Route("/{id}", name="proyecto_delete")
     * @Method("DELETE")
     */
    public function deleteAction( $id)
    {
         $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProyectoBundle:Proyecto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Miembro entity.');
            }

            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('proyecto_backend'));
    }

    /**
     * Creates a form to delete a Proyecto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('proyecto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
