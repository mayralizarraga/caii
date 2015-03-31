<?php

namespace CAII\PublicacionesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PublicacionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('doi')
            ->add('paginas')
            ->add('titulo')
            ->add('tituloLibro')
            ->add('fecha')
            ->add('enlace')
            ->add('tipo_Reporte')
            ->add('ciudad')
            ->add('congreso')
            ->add('issn')
            ->add('capitulo')
            ->add('isbn')
            ->add('mostrar')
            ->add('journal')
            ->add('volumen')
            ->add('editorial')
            ->add('serie')
            ->add('edicion')
            ->add('escuela')
            ->add('idiomaIngles')
            ->add('TipoPublicacion')
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
