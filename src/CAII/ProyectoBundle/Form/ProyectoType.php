<?php

namespace CAII\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProyectoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('fecha_Inicio' ,'date',array(

            'widget' => 'single_text',

            'format' => 'dd-MM-yyyy',

            'attr' => array('class' => 'date')

        ))

            ->add('fecha_Final')
            ->add('status', 'choice', array('choices' => array('1' => 'Activo', '0' => 'Inactivo')))
            ->add('monto_Financiero')
            ->add('id_Entidad')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CAII\ProyectoBundle\Entity\Proyecto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'caii_proyectobundle_proyecto';
    }
}
