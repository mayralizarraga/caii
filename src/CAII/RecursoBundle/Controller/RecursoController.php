<?php

namespace CAII\RecursoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CAII\RecursoBundle\Entity\Recurso;
use CAII\RecursoBundle\Form\RecursoType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * Recurso controller.
 *
 * @Route("/recurso")
 */
class RecursoController extends Controller
{

    /**
     * Lists all Recurso entities.
     *
     * @Route("/", name="recurso")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RecursoBundle:Recurso')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Serve a file
     *
     * @Route("/descarga/recurso/{filename}", name="download_file", requirements={"filename": ".+"})
     */
    public function downloadFileAction($filename)
    {
        /**
         * $basePath can be either exposed (typically inside web/)
         * or "internal"
         */
        $basePath = $this->container->getParameter('resource.directorio');

        $filePath = $basePath.'/'.$filename;

        // check if file exists
        if (!file_exists($filePath)) {
            throw $this->createNotFoundException();
        }

        // prepare BinaryFileResponse
        $response = new BinaryFileResponse($filePath);
        $response->trustXSendfileTypeHeader();
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_INLINE,
            $filename,
            iconv('UTF-8', 'ASCII//TRANSLIT', $filename)
        );

        return $response;
    }



    /**
     * Lists all Recurso entities in backend.
     *
     * @Route("/", name="recurso_backend")
     * @Method("GET")
     * @Template("RecursoBundle:Recurso:indexBackend.html.twig")
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RecursoBundle:Recurso')->findAll();

        return array(
            'entities' => $entities,
        );
    }


    /**
     * Creates a new Recurso entity.
     *
     * @Route("/", name="recurso_create")
     * @Method("POST")
     * @Template("RecursoBundle:Recurso:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Recurso();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            

            return $this->redirect($this->generateUrl('recurso_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Recurso entity.
     *
     * @param Recurso $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Recurso $entity)
    {
        $form = $this->createForm(new RecursoType(), $entity, array(
            'action' => $this->generateUrl('recurso_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Recurso entity.
     *
     * @Route("/new", name="recurso_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Recurso();
        $form   = $this->createForm(new RecursoType(), $entity);

        $form->handleRequest($this->getRequest());


        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $idioma = $entity;
            if ($idioma->getIdioma()=='Español') {
                $idioma->setIdioma('Spanish');
                   
            }else{
                $idioma->setIdioma('English');
            }
            $idioma->setTranslatableLocale('en');
            $em->persist($idioma);
            $em->flush();

            return $this->redirect($this->generateUrl('recurso_backend', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Recurso entity.
     *
     * @Route("/{id}", name="recurso_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RecursoBundle:Recurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recurso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Recurso entity.
     *
     * @Route("/{id}/edit", name="recurso_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RecursoBundle:Recurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recurso entity.');
        }

        $form = $this->createForm(new RecursoType(), $entity, array(
            'action' => $this->generateUrl('recurso_edit', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->handleRequest($this->getRequest());

        if ($form->isValid()) {
            $em->flush();
    
            $idioma = $entity;
            if ($idioma->getIdioma()=='Español') {
                $idioma->setIdioma('Spanish');
                   
            }else{
                $idioma->setIdioma('English');
            }
            $idioma->setTranslatableLocale('en');
            $em->persist($idioma);
            $em->flush();
            return $this->redirect($this->generateUrl('recurso_backend'));
        }

        return array(
            'entity' => $entity, 
            'form' => $form->createView()
        );
    }

    /**
    * Creates a form to edit a Recurso entity.
    *
    * @param Recurso $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Recurso $entity)
    {
        $form = $this->createForm(new RecursoType(), $entity, array(
            'action' => $this->generateUrl('recurso_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Recurso entity.
     *
     * @Route("/{id}", name="recurso_update")
     * @Method("PUT")
     * @Template("RecursoBundle:Recurso:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RecursoBundle:Recurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recurso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('recurso_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Recurso entity.
     *
     * @Route("/{id}", name="recurso_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RecursoBundle:Recurso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Recurso entity.');
            }

            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('recurso_backend'));
    }

    /**
     * Creates a form to delete a Recurso entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recurso_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
