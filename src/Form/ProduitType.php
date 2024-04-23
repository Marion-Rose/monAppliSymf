<?php 
namespace App\Form;

use App\Entity\Produit;
use \Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Distributeur;
use App\Form\Type\MyCheckboxType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


/**
 * Class ProduitType Form
 */
class ProduitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder,
                              array                $options): void
    { 
        $builder 
            ->add('nom', TextType::class, array('label' => 'Nom produit :')) 
            ->add('prix', NumberType::class, array('label' => 'Prix :')) 
 
            ->add('quantite', NumberType::class, 
                array('label' => 'Quantité :'))

            ->add('rupture',MyCheckboxType::class,
                array('label'    => 'Rupture de stock ?','required' => false))

            ->add('lienImage', FileType::class, 
                array('label' => 'Image :', 'required' => false, 
                'data_class' => null,
                    'empty_data' => 'aucune image'))

            ->add('reference',ReferenceType::class, array(

                'label' =>'Référence du poduit',
                "required"  => false
            ))

            ->add('distributeurs',EntityType::Class,array(
                'class' => Distributeur::class,
                'choice_label'=>'nom',
                'label' =>'Selection des distributeurs',
                'multiple' => true,
                'required' => false
            ));
 
    }

    /**
     * @param OptionsResolver $resolver
     * @return void
     */
    public function configureOptions(OptionsResolver $resolver): void
    { 
        $resolver->setDefaults([ 
            'data_class' => Produit::class, 
        ]); 
    } 
} 
