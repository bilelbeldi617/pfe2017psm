<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parent
 *
 * @ORM\Table(name="parent")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\ParentRepository")
 */
class ParentEleve
{



    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_parent", type="string", length=25)
     */
    private $nomParent;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_parent", type="string", length=25)
     */
    private $prenomParent;

    /**
     * @var int
     *
     * @ORM\Column(name="cin_parent", type="integer", unique=true)
     */
    private $cinParent;

    /**
     * @var string
     *
     * @ORM\Column(name="numTel_parent", type="string", length=10)
     */
    private $numTelParent;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_parent", type="string", length=100)
     */
    private $adresseParent;

    /**
     * @return string
     */
    public function getEmailParent()
    {
        return $this->emailParent;
    }

    /**
     * @param string $emailParent
     * @return ParentEleve
     */
    public function setEmailParent($emailParent)
    {
        $this->emailParent = $emailParent;
        return $this;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="email_parent", type="string", length=100)
     */
    private $emailParent;

    /**
     * @var string
     *
     * @ORM\Column(name="login_parent", type="string", length=100)
     */
    private $loginParent;

    /**
     * @var string
     *
     * @ORM\Column(name="password_parent", type="string", length=100)
     */
    private $passwordParent;

    /**
     * @return string
     */
    public function getLoginParent()
    {
        return $this->loginParent;
    }

    /**
     * @param string $loginParent
     */
    public function setLoginParent($loginParent)
    {
        $this->loginParent = $loginParent;
    }

    /**
     * @return string
     */
    public function getPasswordParent()
    {
        return $this->passwordParent;
    }

    /**
     * @param string $passwordParent
     */
    public function setPasswordParent($passwordParent)
    {
        $this->passwordParent = $passwordParent;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="fonction_parent", type="string", length=100)
     */
    private $fonctionParent;


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
     * Set nomParent
     *
     * @param string $nomParent
     * @return Parent
     */
    public function setNomParent($nomParent)
    {
        $this->nomParent = $nomParent;

        return $this;
    }

    /**
     * Get nomParent
     *
     * @return string 
     */
    public function getNomParent()
    {
        return $this->nomParent;
    }

    /**
     * Set prenomParent
     *
     * @param string $prenomParent
     * @return Parent
     */
    public function setPrenomParent($prenomParent)
    {
        $this->prenomParent = $prenomParent;

        return $this;
    }

    /**
     * Get prenomParent
     *
     * @return string 
     */
    public function getPrenomParent()
    {
        return $this->prenomParent;
    }

    /**
     * Set cinParent
     *
     * @param integer $cinParent
     * @return Parent
     */
    public function setCinParent($cinParent)
    {
        $this->cinParent = $cinParent;

        return $this;
    }

    /**
     * Get cinParent
     *
     * @return integer 
     */
    public function getCinParent()
    {
        return $this->cinParent;
    }

    /**
     * Set numTelParent
     *
     * @param string $numTelParent
     * @return Parent
     */
    public function setNumTelParent($numTelParent)
    {
        $this->numTelParent = $numTelParent;

        return $this;
    }

    /**
     * Get numTelParent
     *
     * @return string 
     */
    public function getNumTelParent()
    {
        return $this->numTelParent;
    }

    /**
     * Set adresseParent
     *
     * @param string $adresseParent
     * @return Parent
     */
    public function setAdresseParent($adresseParent)
    {
        $this->adresseParent = $adresseParent;

        return $this;
    }

    /**
     * Get adresseParent
     *
     * @return string 
     */
    public function getAdresseParent()
    {
        return $this->adresseParent;
    }

    /**
     * Set fonctionParent
     *
     * @param string $fonctionParent
     * @return Parent
     */
    public function setFonctionParent($fonctionParent)
    {
        $this->fonctionParent = $fonctionParent;

        return $this;
    }

    /**
     * Get fonctionParent
     *
     * @return string 
     */
    public function getFonctionParent()
    {
        return $this->fonctionParent;
    }
}
