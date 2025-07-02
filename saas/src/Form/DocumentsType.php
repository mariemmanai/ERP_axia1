<?php

namespace App\Form;

use App\Entity\Documents;
use App\Entity\Documentslignes;
use App\Form\DocumentsligneType; 
use App\Entity\Users;
use App\Entity\Articles;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class DocumentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reference', null, [
                'constraints' => [
                    new Callback([$this, 'validateReference']),
                ],
            ])
            ->add('docDate', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'label' => 'Document Date'
            ])
            ->add('emetteur', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'username',
                'attr' => ['class' => 'form-control'],
                'label' => 'Sender'
            ])
            ->add('destinataire', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'username', 
                'attr' => ['class' => 'form-control'],
                'label' => 'Recipient'
            ])
            ->add('type', ChoiceType::class, [
            'choices' => [
                'Devis achat' => 'Devis achat',
                'Commande achat' => 'Commande achat',
                'Facture achat' => 'Facture achat',
                'Facture achat avoire' => 'Facture achat avoire',
                'Bon d\'entrée' => 'Bon d\'entrée',
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
            'attr' => [
                'class' => 'form-control bg-light border-0',
                'onchange' => 'updateReference()' 
            ]
        ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                'Sous traitement' => 'Sous traitement',
                'Ouvert' => 'Ouvert',
                'Confirmé' => 'Confirmé',
                'Cloturé' => 'Cloturé',
            ],
                'attr' => ['class' => 'form-control'],
                'label' => 'Status'
            ])
            ->add('montantHt', NumberType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'HT Amount',
                'required' => true
            ])
            ->add('tauxTva', NumberType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'VAT Rate (%)',
                'required' => false
            ])
            ->add('montantTva', NumberType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'VAT Amount',
                'required' => false
            ])
            ->add('timbre', NumberType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Stamp',
                'required' => false
            ])
            ->add('retenu', NumberType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Withholding',
                'required' => false
            ])
            ->add('lignes', CollectionType::class, [
                'entry_type' => DocumentsligneType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'label' => false,
                'attr' => [
                    'class' => 'lignes-collection',
                ],
            ])
            ->add('montantAPayer', NumberType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'readonly' => 'readonly'
                ],
                'label' => 'Montant à payer',
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Documents::class,
        ]);
    }
public function validateReference($value, ExecutionContextInterface $context)
{
    if (!preg_match('/^[A-Z]{2}\d{2}\d{6}$/', $value)) { // Format: XXYYNNNNNN
        $context->buildViolation('Le format de référence doit être: 2 lettres + 2 chiffres année + 6 chiffres (ex: FV24000001)')
               ->addViolation();
    }
}
}