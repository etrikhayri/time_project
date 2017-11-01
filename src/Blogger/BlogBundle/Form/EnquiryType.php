<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use  Symfony\Component\Form\FormBuilderInterface;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('email', 'email');
        $builder->add('objet');
        $builder->add('contenu', 'textarea');
        
    }

    public function getName()
    {
    	 return 'contact';
    }
    
}