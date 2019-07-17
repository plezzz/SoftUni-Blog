<?php

namespace SoftUniBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email')
            ->add('fullName')
            ->add('password', RepeatedType::class, array(
                "type" => PasswordType::class,
                "first_options" => array("label" => 'Password'),
                'second_options' => array("label" => 'Repeat Password')
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

}
