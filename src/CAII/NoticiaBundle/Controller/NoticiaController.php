<?php

namespace CAII\NoticiaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\NoticiaBundle\Entity\Noticia;
use CAII\NoticiaBundle\Form\NoticiaType;

/**
 * Noticia controller.
 *
 * @Route("/noticia")
 */
class NoticiaController extends Controller
{

    /**
     * Lists all Noticia entities.
     *
     * @Route("/", name="noticia")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('NoticiaBundle:Noticia')->findAll();

        //Query para noticias ordenadas por fecha
        $repository = $this->getDoctrine()
                    ->getRepository('NoticiaBundle:Noticia');
        $dql = $repository->createQueryBuilder('p')
                ->select('p')
                ->where('p.fecha >= :fechaC')
                ->orderBy('p.fecha', 'DESC');
        $dql->setParameter('fechaC', (new \DateTime())->format('Y-m-d'));
        $entities =$dql->getQuery()->getResult();


        return array(
            'entities' => $entities,
        );
    }

    /**
     * Eliminar las noticias viejas
     *
     * @Route("/", name="noticia")
     * @Method("GET")
     * @Template()
     */
    public function deleteNoticiasViejasAction()
    {
        $em = $this->getDoctrine()->getManager();

        $dql = $em->createQueryBuilder();
        $dql -> delete('NoticiaBundle:Noticia', 'p');
        $dql -> where('p.fecha < :fechaC');
        $dql->setParameter('fechaC', (new \DateTime())->format('Y-m-d'));
        $entities =$dql->getQuery()->getResult();

        return $this->redirect($this->generateUrl('noticia_backend'));
    }


    /**
     * Lists all Noticia entities in backend.
     *
     * @Route("/", name="noticia_backend")
     * @Method("GET")
     * @Template("NoticiaBundle:Noticia:indexBackend.html.twig")
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NoticiaBundle:Noticia')->findAll();

        return array(
            'entities' => $entities,
        );
    }


    /**
     * Creates a new Noticia entity.
     *
     * @Route("/", name="noticia_create")
     * @Method("POST")
     * @Template("NoticiaBundle:Noticia:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Noticia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('noticia_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Noticia entity.
    *
    * @param Noticia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Noticia $entity)
    {
        $form = $this->createForm(new NoticiaType(), $entity, array(
            'action' => $this->generateUrl('noticia_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Noticia entity.
     *
     * @Route("/new", name="noticia_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Noticia();
        /*$form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );*/
        $form   = $this->createForm(new NoticiaType(), $entity);

        $form->handleRequest($this->getRequest());


        if ($form->isValid()) {
            $entity->subirFoto($this->container->getParameter('noticia.directorio.imagenes'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('noticia_backend', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );

    }

    /**
     * Finds and displays a Noticia entity.
     *
     * @Route("/{id}", name="noticia_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NoticiaBundle:Noticia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Noticia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Noticia entity.
     *
     * @Route("/{id}/edit", name="noticia_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NoticiaBundle:Noticia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Noticia entity.');
        }

        $form = $this->createForm(new NoticiaType(), $entity, array(
            'action' => $this->generateUrl('noticia_edit', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->handleRequest($this->getRequest());

       if ($form->isValid()) {
            $entity->subirFoto($this->container->getParameter('noticia.directorio.imagenes'));
            $em->flush();

            return $this->redirect($this->generateUrl('noticia_backend'));
        }

        /*$editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);*/

        return array(
            'entity' => $entity, 
            'form' => $form->createView()
        );

        /*$editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );*/
    }

    /**
    * Creates a form to edit a Noticia entity.
    *
    * @param Noticia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Noticia $entity)
    {
        $form = $this->createForm(new NoticiaType(), $entity, array(
            'action' => $this->generateUrl('noticia_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Noticia entity.
     *
     * @Route("/{id}", name="noticia_update")
     * @Method("PUT")
     * @Template("NoticiaBundle:Noticia:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NoticiaBundle:Noticia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Noticia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('noticia_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Noticia entity.
     *
     * @Route("/{id}", name="noticia_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        /*$form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {*/
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NoticiaBundle:Noticia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Noticia entity.');
            }

            $em->remove($entity);
            $em->flush();
        //}

        return $this->redirect($this->generateUrl('noticia_backend'));
    }

    /**
     * Creates a form to delete a Noticia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('noticia_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
