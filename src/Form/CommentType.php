<?php

namespace App\Form;

use App\Entity\Comment;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', CKEditorType::class , ['label'=>'Komentarz',
                'config'=> [
                    'uiColor' => '#e2e2e2',
                    'toolbar' => [ ["-", "Maximize", "Bold","Italic", "Underline","Strike","FontSize","TextColor",
                        "FontName","Link", "BlockQuote","Image","Paste","Copy","NumberedList","JustifyLeft", "JustifyCenter", "JustifyRight", "JustifyBlock"] ],
                    'required' => true
                ]
            ])
            ->add('submit', SubmitType::class, ['label'=>'Skomentuj'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
