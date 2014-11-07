<?php

namespace CAII\PublicacionesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\PublicacionesBundle\Entity\Publicacion;
use CAII\PublicacionesBundle\Form\PublicacionLibroType;
use CAII\PublicacionesBundle\Form\PublicacionCapituloType;
use CAII\PublicacionesBundle\Form\PublicacionTesisType;
use CAII\PublicacionesBundle\Form\PublicacionInternacionalType;
use CAII\PublicacionesBundle\Form\PublicacionNacionalType;
use CAII\PublicacionesBundle\Form\PublicacionRevistaType;
use CAII\PublicacionesBundle\Form\PublicacionReporteType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Publicacion controller.
 *
 * @Route("/publicacion")
 */
class PublicacionController extends Controller
{

    /**
     * Lists all Publicacion entities.
     *
     * @Route("/", name="Publicacion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $dql = $em->createQueryBuilder();
        
        //Query para tipos de publicacion 
        $dql->select('TipoPublicacion.nombre','TipoPublicacion.id')
            ->from('PublicacionesBundle:Publicacion', 'Publicacion')
            ->Join('Publicacion.TipoPublicacion', 'TipoPublicacion')
            ->orderBy('TipoPublicacion.prioridad', 'ASC')
            ->groupBy('Publicacion.TipoPublicacion');
        $tipos =$dql->getQuery()->getResult();

        //Nombre de los publicaciones
        $publicaciones = $em->getRepository('PublicacionesBundle:TipoPublicacion')->findAll();

        //Nombre de los publicaciones
        $publicacionesid = $em->getRepository('PublicacionesBundle:Publicacion')->findAll();

        //Query para las publicaciones ordenadas por fecha
        $repository = $this->getDoctrine()
                    ->getRepository('PublicacionesBundle:Publicacion');
        $dql = $repository->createQueryBuilder('p')
                ->select('p')
                ->orderBy('p.fecha', 'DESC');
        $entities =$dql->getQuery()->getResult();
                

        //Query miembros-publicacion
        $dql->select('MiembroPublicacion.id i', 
                     'Miembro.nombre nombreMiembro, Miembro.apellidoP', 
                     'Publicacion.id idpublicacion')
            ->from('MiembroBundle:MiembroPublicacion', 'MiembroPublicacion')
            ->Join('MiembroPublicacion.idMiembro', 'Miembro')
            ->Join('MiembroPublicacion.idPublicacion', 'Publicacion')
            ->groupBy('MiembroPublicacion.id')
            ->orderBy('MiembroPublicacion.id');

        $miembros=$dql->getQuery()->getResult();
       

        return array(
            'entities' => $entities,
            'tipos' => $tipos,
            'miembros'=>$miembros,
            'publicaciones'=>$publicaciones,
            'publicacionesid'=>$publicacionesid,
        );
    }

    /**
     * Lists all Miembro entities.
     *
     * @Route("/", name="Publicacion_backend")
     * @Method("GET")
     * @Template("PublicacionesBundle:Publicacion:indexBackend.html.twig")
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PublicacionesBundle:Publicacion')->findAll();
        return array(
            'entities' => $entities,
                          
            
        );
    }

    /**
     * Displays miembros-publicacion.
     *
     * @Route("/{id}/miembros", name="publicacion_miembros")
     * @Method("GET")
     * @Template("PublicacionesBundle:Publicacion:miembros.html.twig")
     */
    public function publicacionMiembrosAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PublicacionesBundle:Publicacion')->find($id);

        $dql = $em->createQueryBuilder();
 
        $dql->select('MiembroPublicacion.id', 
                     'Miembro.nombre nombreMiembro, Miembro.id idmiembro, Miembro.apellidoP, Miembro.apellidoM', 
                     'Publicacion.titulo, Publicacion.id idpublicacion')
            ->from('MiembroBundle:MiembroPublicacion', 'MiembroPublicacion')
            ->Join('MiembroPublicacion.idMiembro', 'Miembro')
            ->Join('MiembroPublicacion.idPublicacion', 'Publicacion')
            ->where('Publicacion.id = :id_MiembroPublicacion' );
        $dql->setParameter('id_MiembroPublicacion', $id);

        $members = $dql->getQuery()->getResult();
     

        return array(
            'entity'      => $entity,
            'members'   => $members,
            
        );
    }




    /**
     * Creates a new Publicacion entity.
     *
     * @Route("/", name="Publicacion_create")
     * @Method("POST")
     * @Template("PublicacionesBundle:Publicacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Publicacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Publicacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Publicacion entity.
    *
    * @param Publicacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Publicacion $entity)
    {
        $form = $this->createForm(new PublicacionType(), $entity, array(
            'action' => $this->generateUrl('Publicacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Lists all Miembro entities.
     *
     * @Route("/", name="Publicacion_new")
     * @Method("GET")
     * @Template("PublicacionesBundle:Publicacion:newLibro.html.twig")
     */
    public function newLibroAction($tipo)
    {
        $entity = new Publicacion();
        // $form   = $this->createCreateForm($entity);
        switch ($tipo){
            case "Libro":
                $form   = $this->createForm(new PublicacionLibroType($this->getDoctrine()->getManager()), $entity);
                break;
            case "Capitulo":
                $form   = $this->createForm(new PublicacionCapituloType($this->getDoctrine()->getManager()), $entity);
                break; 
            case "Revista":
                $form   = $this->createForm(new PublicacionRevistaType($this->getDoctrine()->getManager()), $entity);
                break; 
            case "Internacional":
                $form   = $this->createForm(new PublicacionInternacionalType($this->getDoctrine()->getManager()), $entity);
                break; 
            case "Nacional":
                $form   = $this->createForm(new PublicacionNacionalType($this->getDoctrine()->getManager()), $entity);
                break; 
            case "Reporte":
                $form   = $this->createForm(new PublicacionReporteType($this->getDoctrine()->getManager()), $entity);
                break; 
            case "Tesis":
                $form   = $this->createForm(new PublicacionTesisType($this->getDoctrine()->getManager()), $entity);
                break; 

        }
        


        $form->handleRequest($this->getRequest());

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Publicacion_backend', array('id' => $entity->getId())));
        }

        $view="PublicacionesBundle:Publicacion:new".$tipo.".html.twig";
        $content = $this->renderView($view,
        array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));

    return new Response($content);


        
    }

    

    /**
     * Finds and displays a Publicacion entity.
     *
     * @Route("/{id}", name="Publicacion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PublicacionesBundle:Publicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Publicacion entity.
     *
     * @Route("/{id}/edit", name="Publicacion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($tipo,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PublicacionesBundle:Publicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publicacion entity.');
        }

        switch ($tipo){
            case "Libro":
                $formType = new PublicacionLibroType();
                break;
            case "Capitulo":
                $formType = new PublicacionCapituloType();
                break; 
            case "Revista":
                $formType = new PublicacionRevistaType();
                break; 
            case "Internacional":
                $formType = new PublicacionInternacionalType();
                break; 
            case "Nacional":
                $formType = new PublicacionNacionalType();
                break; 
            case "Reporte":
                $formType = new PublicacionReporteType();
                break; 
            case "Tesis":
                $formType = new PublicacionTesisType();
                break; 

        }

        
        $form = $this->createForm($formType, $entity, array(
            'action' => $this->generateUrl('Publicacion_edit', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->handleRequest($this->getRequest());

       if ($form->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('Publicacion_backend'));
        }

        

        $view="PublicacionesBundle:Publicacion:edit".$tipo.".html.twig";
        $content = $this->renderView($view,
        array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to edit a Publicacion entity.
    *
    * @param Publicacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Publicacion $entity)
    {
        $form = $this->createForm(new PublicacionType(), $entity, array(
            'action' => $this->generateUrl('Publicacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Publicacion entity.
     *
     * @Route("/{id}", name="Publicacion_update")
     * @Method("PUT")
     * @Template("PublicacionesBundle:Publicacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PublicacionesBundle:Publicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('Publicacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Publicacion entity.
     *
     * @Route("/{id}", name="Publicacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction( $id)
    {
        $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PublicacionesBundle:Publicacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Miembro entity.');
            }

            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('Publicacion_backend'));
    }

    /**
     * Creates a form to delete a Publicacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Publicacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
