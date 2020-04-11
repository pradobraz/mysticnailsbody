<?php

namespace App\Form;

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

class MarcacoesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCliente')
            ->add('servico1', ChoiceType::class, [
                'choices'=>[
                    'Escolha' => null,
                    'Manicure' => 'Manicure',
                    'Verniz gel' => 'Verniz gel',
                    'Manutenção de unhas de gel' => 'Manutenção de unhas de gel',
                    'Aplicação de unhas de gel sem entenção' => 'Aplicação de unhas de gel sem entenção',
                    'Aplicação de unhas de gel com entenção' => 'Aplicação de unhas de gel com entenção',
                    'Pedicure' => 'Pedicure',
                    'Pedicure verniz gel' => 'Pedicure verniz gel',
                    'Parafina' => 'Parafina',
                    '1--' => '',
                    'Depilação perna inteira' => 'Depilação perna inteira',
                    'Depilação meia perna' => 'Depilação meia perna',
                    'Depilação virilhas' => 'Depilação virilhas',
                    'Depilação axilas' => 'Depilação axilas',
                    'Depilação buco' => 'Depilação buco',
                    'Depilação sobrancelhas' => 'Depilação sobrancelhas',
                    'Depilação pack' => 'Depilação pack',
                    'Depilação masculina ao peito' => 'Depilação masculina ao peito',
                    '2--' => '',
                    'Limpeza facial hidratação' => 'Limpeza facial hidratação',
                    'Limpeza facial tratamento' => 'Limpeza facial tratamento',
                    '3--' => '',
                    'Massagem relaxante 30M' => 'Massagem relaxante 30M',
                    'Massagem relaxante 60M' => 'Massagem relaxante 60M',
                    'Massagem membros inferiores' => 'Massagem membros inferiores',
                    'Massagem abdomen' => 'Massagem abdomen'
                ]
            ])
            ->add('servico2', ChoiceType::class, [
                'choices'=>[
                    'Escolha' => null,
                    'Manicure' => 'Manicure',
                    'Verniz gel' => 'Verniz gel',
                    'Manutenção de unhas de gel' => 'Manutenção de unhas de gel',
                    'Aplicação de unhas de gel sem entenção' => 'Aplicação de unhas de gel sem entenção',
                    'Aplicação de unhas de gel com entenção' => 'Aplicação de unhas de gel com entenção',
                    'Pedicure' => 'Pedicure',
                    'Pedicure verniz gel' => 'Pedicure verniz gel',
                    'Parafina' => 'Parafina',
                    '1--' => '',
                    'Depilação perna inteira' => 'Depilação perna inteira',
                    'Depilação meia perna' => 'Depilação meia perna',
                    'Depilação virilhas' => 'Depilação virilhas',
                    'Depilação axilas' => 'Depilação axilas',
                    'Depilação buco' => 'Depilação buco',
                    'Depilação sobrancelhas' => 'Depilação sobrancelhas',
                    'Depilação pack' => 'Depilação pack',
                    'Depilação masculina ao peito' => 'Depilação masculina ao peito',
                    '2--' => '',
                    'Limpeza facial hidratação' => 'Limpeza facial hidratação',
                    'Limpeza facial tratamento' => 'Limpeza facial tratamento',
                    '3--' => '',
                    'Massagem relaxante 30M' => 'Massagem relaxante 30M',
                    'Massagem relaxante 60M' => 'Massagem relaxante 60M',
                    'Massagem membros inferiores' => 'Massagem membros inferiores',
                    'Massagem abdomen' => 'Massagem abdomen'
                ]
            ])
            ->add('servico3', ChoiceType::class, [
                'choices'=>[
                    'Escolha' => null,
                    'Manicure' => 'Manicure',
                    'Verniz gel' => 'Verniz gel',
                    'Manutenção de unhas de gel' => 'Manutenção de unhas de gel',
                    'Aplicação de unhas de gel sem entenção' => 'Aplicação de unhas de gel sem entenção',
                    'Aplicação de unhas de gel com entenção' => 'Aplicação de unhas de gel com entenção',
                    'Pedicure' => 'Pedicure',
                    'Pedicure verniz gel' => 'Pedicure verniz gel',
                    'Parafina' => 'Parafina',
                    '1--' => '',
                    'Depilação perna inteira' => 'Depilação perna inteira',
                    'Depilação meia perna' => 'Depilação meia perna',
                    'Depilação virilhas' => 'Depilação virilhas',
                    'Depilação axilas' => 'Depilação axilas',
                    'Depilação buco' => 'Depilação buco',
                    'Depilação sobrancelhas' => 'Depilação sobrancelhas',
                    'Depilação pack' => 'Depilação pack',
                    'Depilação masculina ao peito' => 'Depilação masculina ao peito',
                    '2--' => '',
                    'Limpeza facial hidratação' => 'Limpeza facial hidratação',
                    'Limpeza facial tratamento' => 'Limpeza facial tratamento',
                    '3--' => '',
                    'Massagem relaxante 30M' => 'Massagem relaxante 30M',
                    'Massagem relaxante 60M' => 'Massagem relaxante 60M',
                    'Massagem membros inferiores' => 'Massagem membros inferiores',
                    'Massagem abdomen' => 'Massagem abdomen'
                ]
            ])
            ->add('servico4', ChoiceType::class, [
                'choices'=>[
                    'Escolha' => null,
                    'Manicure' => 'Manicure',
                    'Verniz gel' => 'Verniz gel',
                    'Manutenção de unhas de gel' => 'Manutenção de unhas de gel',
                    'Aplicação de unhas de gel sem entenção' => 'Aplicação de unhas de gel sem entenção',
                    'Aplicação de unhas de gel com entenção' => 'Aplicação de unhas de gel com entenção',
                    'Pedicure' => 'Pedicure',
                    'Pedicure verniz gel' => 'Pedicure verniz gel',
                    'Parafina' => 'Parafina',
                    '1--' => '',
                    'Depilação perna inteira' => 'Depilação perna inteira',
                    'Depilação meia perna' => 'Depilação meia perna',
                    'Depilação virilhas' => 'Depilação virilhas',
                    'Depilação axilas' => 'Depilação axilas',
                    'Depilação buco' => 'Depilação buco',
                    'Depilação sobrancelhas' => 'Depilação sobrancelhas',
                    'Depilação pack' => 'Depilação pack',
                    'Depilação masculina ao peito' => 'Depilação masculina ao peito',
                    '2--' => '',
                    'Limpeza facial hidratação' => 'Limpeza facial hidratação',
                    'Limpeza facial tratamento' => 'Limpeza facial tratamento',
                    '3--' => '',
                    'Massagem relaxante 30M' => 'Massagem relaxante 30M',
                    'Massagem relaxante 60M' => 'Massagem relaxante 60M',
                    'Massagem membros inferiores' => 'Massagem membros inferiores',
                    'Massagem abdomen' => 'Massagem abdomen'
                ]
            ])
            ->add('marcacaoDia', DateType::class)
            ->add('marcacaoHora', TimeType::class)
            ->add('valor', NumberType::class)
            ->add('estado', HiddenType::class, ['data'=>'Agendado'])
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
