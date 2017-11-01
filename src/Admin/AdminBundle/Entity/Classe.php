<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity
 */
class Classe
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
     * @var integer
     *
     * @ORM\Column(name="nbre_eleve", type="integer", nullable=false)
     */
    private $nbreEleve;



    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Classe
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
     * Set nbreEleve
     *
     * @param integer $nbreEleve
     * @return Classe
     */
    public function setNbreEleve($nbreEleve)
    {
        $this->nbreEleve = $nbreEleve;
    
        return $this;
    }

    /**
     * Get nbreEleve
     *
     * @return integer 
     */
    public function getNbreEleve()
    {
        return $this->nbreEleve;
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
    	return $this->libelle;
    }
}
