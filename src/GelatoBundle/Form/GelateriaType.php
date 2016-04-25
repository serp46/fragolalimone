<?php

namespace GelatoBundle\Form;

use GelatoBundle\Entity\Gelateria;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class GelateriaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => false))
            ->add('city', EntityType::class, [
                'class' => 'GelatoBundle:Citta',
                'choice_label' => 'name'
            ], array('label' => false))
            ->add('address', TextType::class, array('label' => false))
            ->add('phone', IntegerType::class, array('label' => false))
            ->add('monday', ChoiceType::class)
            ->add('tuesday', ChoiceType::class)
            ->add('wednesday', ChoiceType::class)
            ->add('thursday', ChoiceType::class)
            ->add('friday', ChoiceType::class)
            ->add('saturday', ChoiceType::class)
            ->add('sunday', ChoiceType::class)
            ->add('gusti', EntityType::class, [
                'class' => 'GelatoBundle:Gusto',
                'choice_label' => 'name'])
            ->add('save', SubmitType::class, array('label' => 'Aggiungi'))
            ->getForm();
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GelatoBundle\Entity\Gelateria'
        ));
    }
}
