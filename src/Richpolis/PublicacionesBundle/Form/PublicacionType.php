<?php

namespace Richpolis\PublicacionesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Richpolis\BackendBundle\Repository\UsuariosRepository;
use Richpolis\PublicacionesBundle\Repository\CategoriaPublicacionRepository;

class PublicacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo','text',array(
                'label'=>'Proyecto en español','required'=>true,'attr'=>array(
                    'class'=>'form-control placeholder',
                    'placeholder'=>'Proyecto',
                    'data-bind'=>'value: proyecto'
                    )
                ))    
            ->add('descripcion',null,array(
                'label'=>'Descripcion en español',
                'required'=>true,
                'attr'=>array(
                    'class'=>'cleditor tinymce form-control placeholder',
                   'data-theme' => 'advanced',
                    )
                ))
            ->add('categoria',null,array(
                'label'=>'Categoria',
                'required'=>true,
                'read_only'=>true,
                'attr'=>array(
                    'class'=>'validate[required] form-control placeholder',
                    'placeholder'=>'Categoria',
                    'data-bind'=>'value: categoria',
                    )
                ))
            ->add('usuario',null,array(
                'label'=>'Usuario',
                'required'=>true,
                'read_only'=>true,                
                'attr'=>array(
                    'class'=>'validate[required] form-control placeholder',
                    'placeholder'=>'Usuario',
                    'data-bind'=>'value: usuario',
                    )
                ))
            ->add('file','file',array('label'=>'Portada','attr'=>array(
                'class'=>'form-control placeholder',
                'placeholder'=>'Portada',
                'data-bind'=>'value: portada'
             )))
            ->add('imagen','hidden')
            ->add('position','hidden')
            ->add('slug','hidden')
			->add('status','hidden')
            //->add('galerias','hidden')    
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Richpolis\PublicacionesBundle\Entity\Publicacion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'richpolis_publicacionesbundle_publicacion';
    }
}
