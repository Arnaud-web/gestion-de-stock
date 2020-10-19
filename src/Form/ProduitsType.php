<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\Produits;
use App\Entity\Fournisseurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie', EntityType::class, [
                'class'=> Categories::class,
                'choice_label' => 'nom'
            ])
            ->add('nom')
            ->add('quantite')
            ->add('prix')
            ->add('description')
            ->add('fournisseur', EntityType::class, [
                'class'=> Fournisseurs::class,
                'choice_label' => 'societe'
            ])
            // ->add('categorie')
            ->add('createdAt')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produits::class,
        ]);
    }
}
