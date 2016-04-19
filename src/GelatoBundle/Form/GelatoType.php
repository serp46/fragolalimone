namespace GelatoBundle\Form\GelatoType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType; 
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class GelatoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Gusto', 'entity', array(
            'class' => 'GelatoBundle:Gusto',
            'property' => 'name',
        ));
    }

    public function getName()
    {
        return '';
    }
}