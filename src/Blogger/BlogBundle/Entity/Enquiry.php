<?php
// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace Blogger\BlogBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Length;



class Enquiry
{
    protected $nom;

    protected $email;

    protected $objet;

    protected $contenu;

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getObjet()
    {
        return $this->objet;
    }

    public function setObjet($objet)
    {
        $this->objet = $objet;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }


    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
    	$metadata->addPropertyConstraint('nom', new NotBlank());
    	
    	$metadata->addPropertyConstraint('email', new Email());
    	
    	$metadata->addPropertyConstraint('objet', new NotBlank());
    	$metadata->addPropertyConstraint('email', new Email(array('message'=>'merci de nous laisser une adresse mail correcte.','checkMX' => true)));
    	
    	$metadata->addPropertyConstraint('nom', new Length(array('min'=>5,'max'=>35)));
    	$metadata->addPropertyConstraint('objet', new Length(array('min'=>5,'max'=>35)));
    	$metadata->addPropertyConstraint('contenu', new Length(array('min'=>5,'max'=>35)));
    }
    

}