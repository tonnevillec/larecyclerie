<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'attr'  => [
                    'placeholder'   => 'users.email.title'
                ]
            ])
            ->add('password', PasswordType::class, [
                'attr'  => [
                    'placeholder'   => 'users.password.title'
                ]
            ])

            ->add('username', null, [
                'required' => false
            ])
            ->add('firstname', null, [
                'required' => false
            ])
            ->add('lastname', null, [
                'required' => false
            ])
            ->add('gender', null, [
                'required' => false
            ])
            ->add('address', null, [
                'required' => false
            ])
            ->add('city', null, [
                'required' => false
            ])
            ->add('postal_code', null, [
                'required' => false
            ])
            ->add('phone', null, [
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
