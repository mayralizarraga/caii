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
            ->add('fecha_Inicio','date', array( 'years' => range(date('Y') - 10, date('Y') + 10),
                                                'required'=> false,
                                                'empty_value'  => '',
                ))
            ->add('fecha_Final','date', array(  'years' => range(date('Y') - 10, date('Y') + 10),
                                                'required'=> false,
                                                'empty_value'  => '',
                ))
            ->add('idEntidad')
            ->add('numeroProyecto') 
            ->add('director') 
            ->add('status', 'choice', array('choices' => array('1' => 'Activo', '0' => 'Inactivo')))
            ->add('monto_Financiero')
            
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
