<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $mp;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set login
     *
     * @param string $login
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mp
     *
     * @param string $mp
     * @return User
     */
    public function setMp($mp)
    {
        $this->mp = $mp;
    
        return $this;
    }

    /**
     * Get mp
     *
     * @return string 
     */
    public function getMp()
    {
        return $this->mp;
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
}
