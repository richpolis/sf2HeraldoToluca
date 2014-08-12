<?php

namespace Richpolis\ComentariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComentarioConImagenType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username','text',array('label'=>'Titulo','attr'=>array(
                'class'=>'validate[required] form-control placeholder',
                'placeholder'=>'Nombre',
                'data-bind'=>'value: nombre'
             )))
            ->add('email','email',array('label'=>'Email','attr'=>array(
                'class'=>'validate[required] form-control placeholder',
                'placeholder'=>'Email',
                'data-bind'=>'value: email'
             )))    
            ->add('message',null,array(
                'label'=>'Comentario',
                'required'=>true,
                'attr'=>array(
                    'class'=>'form-control placeholder',
                    )
                ))
            ->add('file','file',array('label'=>'Archivo'))    
            ->add('status','hidden')
            ->add('archivo','hidden')
            ->add('tipoArchivo','hidden')
            ->add('nivel','hidden')
            ->add('publicacion','hidden')
            ->add('parent','hidden')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Richpolis\ComentariosBundle\Entity\Comentario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'richpolis_comentariosbundle_comentario_con_imagen';
    }
}
