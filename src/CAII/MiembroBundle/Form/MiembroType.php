<?php

namespace CAII\MiembroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MiembroType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidoP')
            ->add('apellidoM')
            ->add('status', 'choice', array('choices' => array('1' => 'Activo', '0' => 'Inactivo')))
            ->add('link_Pagina')
            ->add('fotoURL')
            ->add('alum_Descripcion')
            ->add('idOcupacion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CAII\MiembroBundle\Entity\Miembro'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'caii_miembrobundle_miembro';
    }
}
