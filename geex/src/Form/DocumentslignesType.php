<?php
namespace App\Form;

use App\Entity\Documentslignes;
use App\Entity\Articles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class DocumentslignesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('article', EntityType::class, [
                'class' => Articles::class,
                'choice_label' => 'reference', 
                'label' => 'Article',
                'required' => true,
                'attr' => [
                    'class' => 'select-article' // Classe pour faciliter la sélection en JS si nécessaire
                ]
            ])
            ->add('qte', NumberType::class, [
                'label' => 'Quantité',
                'required' => true,
                'attr' => [
                    'min' => 0,
                    'step' => '0.01'
                ]
            ])
            ->add('prixUnitaireHt', NumberType::class, [
                'label' => 'Prix unitaire HT',
                'required' => false,
                'attr' => [
                    'min' => 0,
                    'step' => '0.01'
                ]
            ])
            ->add('prixTotalHt', HiddenType::class, [
                'required' => false,
                'attr' => [
                    'readonly' => true,
                    'class' => 'prix-total-ht'
                ]
            ])
            ->add('remise', NumberType::class, [
                'label' => 'Remise (%)',
                'required' => false,
                'attr' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => '0.01'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Documentslignes::class,
        ]);
    }
}