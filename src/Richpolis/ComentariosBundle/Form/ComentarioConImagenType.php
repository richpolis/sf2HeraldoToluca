<?php

namespace Richpolis\ComentariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Richpolis\ComentariosBundle\Form\DataTransformer\ComentarioToNumberTransformer;
use Richpolis\PublicacionesBundle\Form\DataTransformer\PublicacionToNumberTransformer;

class ComentarioConImagenType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$em = $options['em'];
		$parentTransformer = new ComentarioToNumberTransformer($em);
		$publicacionTransformer = new PublicacionToNumberTransformer($em);
		
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
            ->add($builder->create('publicacion','hidden')->addModelTransformer($publicacionTransformer))
            ->add($builder->create('parent','hidden')->addModelTransformer($parentTransformer))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Richpolis\ComentariosBundle\Entity\Comentario'
        ))
			->setRequired(array('em'))
			->setAllowedTypes(array('em'=>'Doctrine\Common\Persistence\ObjectManager'))
		;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'richpolis_comentariosbundle_comentario_con_imagen';
    }
}
