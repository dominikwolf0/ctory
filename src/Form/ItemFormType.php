<?php
/**
 * Created by PhpStorm.
 * User: dominik.wolf
 * Date: 28.01.2018
 * Time: 11:39
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', HiddenType::class)
            ->add('name', TextType::class)
            ->add('inUse', CheckboxType::class)
            ->add('description', TextType::class)
            ->add('imagePath', FileType::class);
    }

    public function getBlockPrefix()
    {
        return 'item';
    }


    public function configureOptions(OptionsResolver $resolver)
    {
            $resolver->setDefaults([
                'translation_domain' => 'item',
                'label_format'=>'%name%'
                ]);

    }

}