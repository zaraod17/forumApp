<?php

namespace App\Form;

use App\Entity\Posts;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;


class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, ['label' => 'Tytuł'])
            ->add('content', CKEditorType::class , ['label'=>'Zawartość',
                'config'=> [
                    'uiColor' => '#e2e2e2',
                    'toolbar' => [ ["-", "Maximize", "Bold","Italic", "Underline","Strike","FontSize","TextColor",
                        "FontName","Link", "BlockQuote","Image","Paste","Copy","NumberedList","JustifyLeft", "JustifyCenter", "JustifyRight", "JustifyBlock"] ],
                    'required' => true,
                    'extraPlugins'=> 'bbcode'
                ]
            ])
            ->add('submit', SubmitType::class, ['label'=>'Dodaj'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Posts::class,
        ]);
    }
}
