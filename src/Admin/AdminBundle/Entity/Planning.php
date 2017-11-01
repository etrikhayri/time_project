<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 */
class Planning
{
    /**
     * @var string
     */
    private $jour;

    /**
     * @var \DateTime
     */
    private $hEntree;

    /**
     * @var \DateTime
     */
    private $hSortie;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Admin\AdminBundle\Entity\Salle
     */
    private $salle;

    /**
     * @var \Admin\AdminBundle\Entity\Professeur
     */
    private $professeur;

    /**
     * @var \Admin\AdminBundle\Entity\Classe
     */
    private $classe;


    /**
     * Set jour
     *
     * @param string $jour
     * @return Planning
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    
        return $this;
    }

    /**
     * Get jour
     *
     * @return string 
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set hEntree
     *
     * @param \DateTime $hEntree
     * @return Planning
     */
    public function setHEntree($hEntree)
    {
        $this->hEntree = $hEntree;
    
        return $this;
    }

    /**
     * Get hEntree
     *
     * @return \DateTime 
     */
    public function getHEntree()
    {
        return $this->hEntree;
    }

    /**
     * Set hSortie
     *
     * @param \DateTime $hSortie
     * @return Planning
     */
    public function setHSortie($hSortie)
    {
        $this->hSortie = $hSortie;
    
        return $this;
    }

    /**
     * Get hSortie
     *
     * @return \DateTime 
     */
    public function getHSortie()
    {
        return $this->hSortie;
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

    /**
     * Set salle
     *
     * @param \Admin\AdminBundle\Entity\Salle $salle
     * @return Planning
     */
    public function setSalle(\Admin\AdminBundle\Entity\Salle $salle = null)
    {
        $this->salle = $salle;
    
        return $this;
    }

    /**
     * Get salle
     *
     * @return \Admin\AdminBundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set professeur
     *
     * @param \Admin\AdminBundle\Entity\Professeur $professeur
     * @return Planning
     */
    public function setProfesseur(\Admin\AdminBundle\Entity\Professeur $professeur = null)
    {
        $this->professeur = $professeur;
    
        return $this;
    }

    /**
     * Get professeur
     *
     * @return \Admin\AdminBundle\Entity\Professeur 
     */
    public function getProfesseur()
    {
        return $this->professeur;
    }

    /**
     * Set classe
     *
     * @param \Admin\AdminBundle\Entity\Classe $classe
     * @return Planning
     */
    public function setClasse(\Admin\AdminBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return \Admin\AdminBundle\Entity\Classe 
     */
    public function getClasse()
    {
        return $this->classe;
    }
}
