<?php


namespace FrontEndBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;;
use GelatoBundle\Entity\Gusto;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
class GustoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            //->add('Gusto', ChoiceType::class, [
            //  'choices'=>[
            //    'Seleziona' => 'Scegli Tipo',
            //    'Ananas'=> 'Ananas',
            //    'Arancia'=>'Arancia',
            //    'Altro'=>'Altro'
            //  ]
            //])
            ->add('cerca', SubmitType::class)
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

