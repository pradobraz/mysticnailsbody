<?php

namespace App\Form;
use App\Entity\Clientes;
use App\Entity\Marcacoes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class MarcacoesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('cliente', EntityType::class, [
            'class' => Clientes::class,
            'choice_label' => function ($clientes){
                return $clientes->getnome();
            }
        ])
        ->add('nomeCliente')
            ->add('tiposervico1', ChoiceType::class, [
                'choices'  => [
                    'Escolha' => null,
                    'Manicure' => 'Manicure',
                    'Verniz gel' => 'Verniz gel',
                ],
            ])
            ->add('tiposervico2')
            ->add('tiposervico3')
            ->add('tiposervico4')
            ->add('diaM', DateType::class)
            ->add('horaM', TimeType::class)
            ->add('notas', TextType::class)
            ->add('status', TextType::class)
            ->add('valor', NumberType::class)
            ->add('registo', HiddenType::class, array("mapped" => false))
            ->add('registo_update', HiddenType::class, array("mapped" => false))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Marcacoes::class,
        ]);
    }
}
