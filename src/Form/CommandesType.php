<?php

namespace App\Form;

use App\Entity\Clients;
use App\Entity\Employes;
use App\Entity\Commandes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDeCommandes')
            ->add('dataDeLivraison')
            ->add('destinataire')
            ->add('client')
            ->add('client', EntityType::class, [
                'class'=> Clients::class,
                'choice_label' => 'nom'
            ])
            ->add('employe', EntityType::class, [
                'class'=> Employes::class,
                'choice_label' => 'nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commandes::class,
        ]);
    }
}
