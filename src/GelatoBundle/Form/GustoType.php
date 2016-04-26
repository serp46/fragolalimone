<?php

namespace GelatoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class GustoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$builder
        //    ->add('name')
        //    ->add('gelaterie')
        //    ->add('ricerche')
        //;
        ->add('gusti', EntityType::class, [
                'class' => 'GelatoBundle:Gusto',
                'choice_label' => 'name'
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GelatoBundle\Entity\Gusto'
        ));
    }
}
