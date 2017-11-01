<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="bloc", type="string", length=255, nullable=false)
     */
    private $bloc;



    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Salle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set bloc
     *
     * @param string $bloc
     * @return Salle
     */
    public function setBloc($bloc)
    {
        $this->bloc = $bloc;
    
        return $this;
    }

    /**
     * Get bloc
     *
     * @return string 
     */
    public function getBloc()
    {
        return $this->bloc;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    public function __toString(){
    	return $this->libelle.' '.$this->bloc;
    }
}
