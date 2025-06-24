<?php

namespace App\Form;

use App\Entity\Articles;
use App\Entity\Numenclat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class NomenclatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('produit', EntityType::class, [
                'class' => Articles::class,
                'query_builder' => function ($er) {
                    return $er->createQueryBuilder('a')
                        ->where('a.type = :type')
                        ->setParameter('type', 'Produit Fini')
                        ->orderBy('a.reference', 'ASC');
                },
                'choice_label' => function(Articles $article) {
                    return $article->getReference() . ' - ' . $article->getType();
                },
                'label' => 'Produit fini',
                'constraints' => [new NotBlank()]
            ])
            ->add('matiere', EntityType::class, [
                'class' => Articles::class,
                'query_builder' => function ($er) {
                    return $er->createQueryBuilder('a')
                        ->where('a.type = :type')
                        ->setParameter('type', 'Matière Première')
                        ->orderBy('a.reference', 'ASC');
                },
                'choice_label' => function(Articles $article) {
                    return $article->getReference() . ' - ' . $article->getType() . ' (' . $article->getUnite() . ')';
                },
                'label' => 'Matière première',
                'constraints' => [new NotBlank()]
            ])
            ->add('consommation', NumberType::class, [
                'label' => 'Consommation unitaire',
                'attr' => ['step' => '0.0001'],
                'constraints' => [new Positive()]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Numenclat::class,
        ]);
    }
}