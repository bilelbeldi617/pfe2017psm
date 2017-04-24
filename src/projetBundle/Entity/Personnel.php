<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnel
 *
 * @ORM\Table(name="personnel")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\PersonnelRepository")
 */
class Personnel
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
     * @ORM\ManyToOne(targetEntity="Poste")
     *
     */
    private $poste ;

    /**
     * @return mixed
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param mixed $poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="nom_personnel", type="string", length=50)
     */
    private $nomPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_personnel", type="string", length=50)
     */
    private $prenomPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel_personnel", type="string", length=8, unique=true)
     */
    private $numTelPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_personnel", type="string", length=100)
     */
    private $adressePersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="cin_personnel", type="string", length=8, unique=true)
     */
    private $cinPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="login_personnel", type="string", length=50)
     */
    private $loginPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="password_personnel", type="string", length=50)
     */
    private $passwordPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="email_personnel", type="string", length=100, unique=true)
     */
    private $emailPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule_personnel", type="string", length=8, unique=true)
     */
    private $matriculePersonnel;


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
     * Set nomPersonnel
     *
     * @param string $nomPersonnel
     * @return Personnel
     */
    public function setNomPersonnel($nomPersonnel)
    {
        $this->nomPersonnel = $nomPersonnel;

        return $this;
    }

    /**
     * Get nomPersonnel
     *
     * @return string 
     */
    public function getNomPersonnel()
    {
        return $this->nomPersonnel;
    }

    /**
     * Set prenomPersonnel
     *
     * @param string $prenomPersonnel
     * @return Personnel
     */
    public function setPrenomPersonnel($prenomPersonnel)
    {
        $this->prenomPersonnel = $prenomPersonnel;

        return $this;
    }

    /**
     * Get prenomPersonnel
     *
     * @return string 
     */
    public function getPrenomPersonnel()
    {
        return $this->prenomPersonnel;
    }

    /**
     * Set numTelPersonnel
     *
     * @param string $numTelPersonnel
     * @return Personnel
     */
    public function setNumTelPersonnel($numTelPersonnel)
    {
        $this->numTelPersonnel = $numTelPersonnel;

        return $this;
    }

    /**
     * Get numTelPersonnel
     *
     * @return string 
     */
    public function getNumTelPersonnel()
    {
        return $this->numTelPersonnel;
    }

    /**
     * Set adressePersonnel
     *
     * @param string $adressePersonnel
     * @return Personnel
     */
    public function setAdressePersonnel($adressePersonnel)
    {
        $this->adressePersonnel = $adressePersonnel;

        return $this;
    }

    /**
     * Get adressePersonnel
     *
     * @return string 
     */
    public function getAdressePersonnel()
    {
        return $this->adressePersonnel;
    }

    /**
     * Set cinPersonnel
     *
     * @param string $cinPersonnel
     * @return Personnel
     */
    public function setCinPersonnel($cinPersonnel)
    {
        $this->cinPersonnel = $cinPersonnel;

        return $this;
    }

    /**
     * Get cinPersonnel
     *
     * @return string 
     */
    public function getCinPersonnel()
    {
        return $this->cinPersonnel;
    }

    /**
     * Set loginPersonnel
     *
     * @param string $loginPersonnel
     * @return Personnel
     */
    public function setLoginPersonnel($loginPersonnel)
    {
        $this->loginPersonnel = $loginPersonnel;

        return $this;
    }

    /**
     * Get loginPersonnel
     *
     * @return string 
     */
    public function getLoginPersonnel()
    {
        return $this->loginPersonnel;
    }

    /**
     * Set passwordPersonnel
     *
     * @param string $passwordPersonnel
     * @return Personnel
     */
    public function setPasswordPersonnel($passwordPersonnel)
    {
        $this->passwordPersonnel = $passwordPersonnel;

        return $this;
    }

    /**
     * Get passwordPersonnel
     *
     * @return string 
     */
    public function getPasswordPersonnel()
    {
        return $this->passwordPersonnel;
    }

    /**
     * Set emailPersonnel
     *
     * @param string $emailPersonnel
     * @return Personnel
     */
    public function setEmailPersonnel($emailPersonnel)
    {
        $this->emailPersonnel = $emailPersonnel;

        return $this;
    }

    /**
     * Get emailPersonnel
     *
     * @return string 
     */
    public function getEmailPersonnel()
    {
        return $this->emailPersonnel;
    }

    /**
     * Set matriculePersonnel
     *
     * @param string $matriculePersonnel
     * @return Personnel
     */
    public function setMatriculePersonnel($matriculePersonnel)
    {
        $this->matriculePersonnel = $matriculePersonnel;

        return $this;
    }

    /**
     * Get matriculePersonnel
     *
     * @return string 
     */
    public function getMatriculePersonnel()
    {
        return $this->matriculePersonnel;
    }
}
