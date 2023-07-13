<?php

namespace App\Form;

use App\Entity\Kontakturlap;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KontakturlapFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('urlapNev', TextType::class, array( 
                'label'    => 'Neved'))
            ->add('urlapEmail', EmailType::class, array( 
                'label'    => 'E-mail címed'))
            ->add('urlapUzenet', TextareaType::class, array( 
                'label'    => 'Üzenet szövege'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Kontakturlap::class,
            'required' => false,
        ]);
    }
}
