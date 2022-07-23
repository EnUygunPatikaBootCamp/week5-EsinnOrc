<?php
// src/Form/Type/TaskType.php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('task', TextType::class,[
                'label' => 'Yetki Kişinin Adı',
            ])
            ->add('mail', TextType::class,[
                'label' => 'Mail Adresi',
            ])
            ->add('dueDate', DateType::class, [
                'required' => $options['require_due_date'],
                'label' => 'Doğum Tarihi',
            ])
            ->add('save', SubmitType::class,[
                'label' => 'Kaydet',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // ...,
            'require_due_date' => false,
        ]);

        $resolver->setAllowedTypes('require_due_date', 'bool');
    }
    
    
}