<?php
namespace CAII\RecursoBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class RecursoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('nombre',null, array(
                       'attr' => array('style' => 'width: 50%')
                      ))
            ->add('file')
            ->add('descripcion',null, array(
                       'attr' => array('style' => 'width: 100%')
                      ))
            ->add('idioma', 'choice', array(
                    'choices'   => array(
                        'Español'   => 'Español',
                        'Inglés' => 'Inglés',
                        
                    )))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CAII\RecursoBundle\Entity\Recurso'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'caii_recursobundle_recurso';
    }
}