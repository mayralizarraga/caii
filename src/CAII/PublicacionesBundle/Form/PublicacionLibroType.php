<?php

namespace CAII\PublicacionesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PublicacionLibroType extends AbstractType
{
    public function __construct($em) {
        $this->em = $em;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('doi')
            ->add('paginas')
            ->add('tituloLibro')
            ->add('fecha')
            ->add('isbn')
            ->add('volumen')
            ->add('editorial')
            ->add('serie')
            ->add('edicion')
            ->add('TipoPublicacion','entity', array(
                     'class' => 'PublicacionesBundle:TipoPublicacion',
                     'property' => 'nombre',
                     'disabled'=> true,
                     'read_only' => true,
                     'data' => $this->em->getReference("PublicacionesBundle:TipoPublicacion", 1)
                ))
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CAII\PublicacionesBundle\Entity\Publicacion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'caii_publicacionesbundle_publicacion';
    }
}
