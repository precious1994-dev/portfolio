<?php

namespace App\Form;

use App\Entity\Realisation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RealisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('domaine')
            ->add('description')           
            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                 'required' => false,
                'label' => 'Date début',
                'attr' => [
                    'data-inputmask' => 'dd/mm/aaaa',
                    'data-mask' => ''
                ]
            ])
            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de fin',
                 'required' => false,
                'attr' => [
                    'data-inputmask' => 'dd/mm/aaaa',
                    'data-mask' => ''
                ]
            ])
            ->add('pieceJointe', FileType::class,
                [
                    'label' => 'Pièce Jointe',
                    'required' => false,
                    'attr' => 
                        [
                            'class' => 'no-display',
                            'onchange' => "$(this).parent().parent().find('span.file-name').html(this.files[0].name)",
                        ]  
                ])
            ->add('flag')
            // ->add('idPersonne')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Realisation::class,
        ]);
    }
}
