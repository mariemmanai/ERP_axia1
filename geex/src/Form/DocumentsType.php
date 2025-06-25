<?php

namespace App\Form;

use App\Entity\Documents;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Repository\UsersRepository;
use App\Repository\DocumentsRepository;

class DocumentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('docDate', DateType::class, [
                'widget' => 'single_text',
                'required' => true,
                'label' => 'Date du document'
            ])
            ->add('emetteur', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'username',
                'label' => 'Émetteur',
                'query_builder' => function (UsersRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->join('u.profile', 'p')
                        ->where('p.id = :profileId')
                        ->setParameter('profileId', 5);
                }
            ])
            ->add('destinataire', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'username',
                'label' => 'Destinataire',
                'query_builder' => function (UsersRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->join('u.profile', 'p')
                        ->where('p.id = :profileId')
                        ->setParameter('profileId', 6);
                }
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Devis achat' => 'Devis achat',
                    'Commande achat' => 'Commande achat',
                    'Facture achat' => 'Facture achat',
                    'Facture achat avoire' => 'Facture achat avoire',
                    'Bon d\'entré' => 'Bon d\'entré',
                    'Bon de transfert' => 'Bon de transfert',
                    'Bon de retour' => 'Bon de retour',
                    'Devis vente' => 'Devis vente',
                    'Commande vente' => 'Commande vente',
                    'Facture vente' => 'Facture vente',
                    'Facture vente avoire' => 'Facture vente avoire',
                    'Bon de sortie' => 'Bon de sortie',
                    'Bon de livraison' => 'Bon de livraison',
                    'Inventaire' => 'Inventaire'
                ],
                'label' => 'Type de document'
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Ouvert' => 'Ouvert',
                    'Confirmé' => 'Confirmé',
                    'Cloturé' => 'Cloturé'
                ],
                'label' => 'Statut'
            ])
            ->add('montantHt', NumberType::class, [
                'required' => false,
                'label' => 'Montant HT'
            ])
            ->add('tauxTva', ChoiceType::class, [
                'required' => false,
                'label' => 'Taux TVA'
            ])
            ->add('timbre', NumberType::class, [
                'required' => false,
                'label' => 'Timbre'
            ])
            ->add('retenu', NumberType::class, [
                'required' => false,
                'label' => 'Retenu'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Documents::class,
        ]);
    }
}