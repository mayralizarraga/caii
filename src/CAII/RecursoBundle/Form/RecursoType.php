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
            ->add('descripcion', 'ckeditor', array(
'config' => array(
'toolbar' => array(
),
'uiColor' => '#ffffff',
'resize_enabled' => false,
'removePlugins' => 'elementspath',
'height' => '60px',
'width' => '100%',
'extraPlugins' => 'wordcount',
'wordcount' => array(
'showWordCount' => false,
'showCharCount' => true,
'countHTML' => false,
'charLimit' => 50,
'countSpacesAsChars' => true,
)
),
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