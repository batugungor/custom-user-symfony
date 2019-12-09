<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApplyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('signature-1', HiddenType::class, ['attr' => ['id' => 'signature-1']])
            ->add('signature-2', HiddenType::class, ['attr' => ['id' => 'signature-2']])
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('gender', ChoiceType::class, [
                'choices' => ['man' => 'm', 'vrouw' => 'v'],
                'multiple'=>false,
                'expanded' => true
            ])
            ->add('phone_number', TextType::class)
            ->add('mobile_number', TextType::class)
            ->add('email', TextType::class)
            ->add('date_of_birth', DateType::class, [
                'data' => new \DateTime(),
            ])
            ->add('address', TextType::class)
            ->add('house_number', TextType::class)
            ->add('residence', TextType::class)
            ->add('postal_code', TextType::class)
            ->add('first_lastname_parent', TextType::class)
            ->add('date_of_birth_parent', DateType::class, [
                'data' => new \DateTime(),
            ])
            ->add('iban', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
