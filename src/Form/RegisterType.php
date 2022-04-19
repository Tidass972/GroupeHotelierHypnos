<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Votre prénom',
                'constraints' => new Length(30, 2),
                'attr' => [
                    'placeholder' => 'prénom'
                ]
            ])
            ->add('lastname',TextType::class, [
                'label' => 'Votre nom',
                'constraints' => new Length(30, 2),
                'attr' => [
                    'placeholder' => 'nom'
                ]
            ])
            ->add('email', EmailType::class ,[
                'label' => 'Votre email',
                'constraints' => new Length(60, 2),
                'attr' => [
                    'placeholder' => 'ex: monemail@exemple.com'
                ]
            ])
            ->add('password',PasswordType::class, [
                'label' => 'Mot de passe',
                'attr' => [
                    'placeholder' => 'Entrez votre mot de passe'
                ]
            ])
            ->add('password_confirm',PasswordType::class, [
                'label' => 'Confirmer votre mot de passe',
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'Entrez votre mot de passe'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => "S'inscrire",
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
