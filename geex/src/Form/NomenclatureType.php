<?php
namespace App\Form;

use App\Entity\Numenclat;
use App\Entity\Articles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NomenclatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('produit', EntityType::class, [
                'class' => Articles::class,
                'choice_label' => 'reference',
                'label' => 'Produit Fini',
                'query_builder' => function ($er) {
                    return $er->createQueryBuilder('a')
                        ->where('a.type = :type')
                        ->setParameter('type', 'Produit Fini');
                },
            ])
            ->add('matiere', EntityType::class, [
                'class' => Articles::class,
                'choice_label' => function (Articles $article) {
                    return $article->getReference() . ' - ' . $article->getUnite();
                },
                'label' => 'Matière Première',
                'query_builder' => function ($er) {
                    return $er->createQueryBuilder('a')
                        ->where('a.type = :type')
                        ->setParameter('type', 'Matière Première');
                },
            ])
            ->add('consommation', TextType::class, [
                'label' => 'Consommation (ex: 2.5 kg)'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Numenclat::class,
        ]);
    }
}