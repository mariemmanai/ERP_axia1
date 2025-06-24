<?php

namespace App\Form;

use App\Entity\Stock;
use App\Entity\Articles;
use App\Entity\Depots;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;

class StockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('article', EntityType::class, [
                'class' => Articles::class,
                'choice_label' => function(Articles $article) {
                    return $article->getReference() . ' - ' . $article->getType();
                },
                'label' => 'Article',
                'constraints' => [new NotBlank()]
            ])
            ->add('depot', EntityType::class, [
                'class' => Depots::class,
                'choice_label' => 'intitule',
                'label' => 'Dépôt',
                'constraints' => [new NotBlank()]
            ])
            ->add('qteStockPrincipal', NumberType::class, [
                'label' => 'Quantité en stock principal',
                'constraints' => [new PositiveOrZero()]
            ])
            ->add('qteStockDispo', NumberType::class, [
                'label' => 'Quantité disponible',
                'constraints' => [new PositiveOrZero()]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stock::class,
        ]);
    }
}