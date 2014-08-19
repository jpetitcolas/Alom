<?php

namespace MyCompany\MyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MyEntityType extends AbstractType
{
    public static function sayHello()
    {
        echo $this->hello;
    }

    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name');
    }

    public function getName()
    {
        return 'myentity';
    }
}

