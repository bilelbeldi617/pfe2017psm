<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table(name="enseignant")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\EnseignantRepository")
 */
class Enseignant
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
     * @ORM\Column(name="nom_enseignant", type="string", length=50)
     */

    private $nomEnseignant;


    /**
     * @ORM\ManyToOne(targetEntity="Grade")
     *
     */
    private $grade ;

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }







    /**
     * @var string
     *
     * @ORM\Column(name="prenom_enseignant", type="string", length=50)
     */
    private $prenomEnseignant;

    /**
     * @var int
     *
     * @ORM\Column(name="num_tel_enseignant", type="integer", unique=true)
     */
    private $numTelEnseignant;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_enseignant", type="string", length=100)
     */
    private $adresseEnseignant;

    /**
     * @var string
     *
     * @ORM\Column(name="cin_enseignant", type="string", length=8, unique=true)
     */
    private $cinEnseignant;

    /**
     * @var string
     *
     * @ORM\Column(name="email_enseignant", type="string", length=100, unique=true)
     */
    private $emailEnseignant;

    /**
     * @var string
     *
     * @ORM\Column(name="login_enseignant", type="string", length=50)
     */
    private $loginEnseignant;

    /**
     * @var string
     *
     * @ORM\Column(name="password_enseignant", type="string", length=50)
     */
    private $passwordEnseignant;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule_enseignant", type="string", length=8, unique=true)
     */
    private $matriculeEnseignant;


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
     * Set nomEnseignant
     *
     * @param string $nomEnseignant
     * @return Enseignant
     */
    public function setNomEnseignant($nomEnseignant)
    {
        $this->nomEnseignant = $nomEnseignant;

        return $this;
    }

    /**
     * Get nomEnseignant
     *
     * @return string 
     */
    public function getNomEnseignant()
    {
        return $this->nomEnseignant;
    }

    /**
     * Set prenomEnseignant
     *
     * @param string $prenomEnseignant
     * @return Enseignant
     */
    public function setPrenomEnseignant($prenomEnseignant)
    {
        $this->prenomEnseignant = $prenomEnseignant;

        return $this;
    }

    /**
     * Get prenomEnseignant
     *
     * @return string 
     */
    public function getPrenomEnseignant()
    {
        return $this->prenomEnseignant;
    }

    /**
     * Set numTelEnseignant
     *
     * @param integer $numTelEnseignant
     * @return Enseignant
     */
    public function setNumTelEnseignant($numTelEnseignant)
    {
        $this->numTelEnseignant = $numTelEnseignant;

        return $this;
    }

    /**
     * Get numTelEnseignant
     *
     * @return integer 
     */
    public function getNumTelEnseignant()
    {
        return $this->numTelEnseignant;
    }

    /**
     * Set adresseEnseignant
     *
     * @param string $adresseEnseignant
     * @return Enseignant
     */
    public function setAdresseEnseignant($adresseEnseignant)
    {
        $this->adresseEnseignant = $adresseEnseignant;

        return $this;
    }

    /**
     * Get adresseEnseignant
     *
     * @return string 
     */
    public function getAdresseEnseignant()
    {
        return $this->adresseEnseignant;
    }

    /**
     * Set cinEnseignant
     *
     * @param string $cinEnseignant
     * @return Enseignant
     */
    public function setCinEnseignant($cinEnseignant)
    {
        $this->cinEnseignant = $cinEnseignant;

        return $this;
    }

    /**
     * Get cinEnseignant
     *
     * @return string 
     */
    public function getCinEnseignant()
    {
        return $this->cinEnseignant;
    }

    /**
     * Set emailEnseignant
     *
     * @param string $emailEnseignant
     * @return Enseignant
     */
    public function setEmailEnseignant($emailEnseignant)
    {
        $this->emailEnseignant = $emailEnseignant;

        return $this;
    }

    /**
     * Get emailEnseignant
     *
     * @return string 
     */
    public function getEmailEnseignant()
    {
        return $this->emailEnseignant;
    }

    /**
     * Set loginEnseignant
     *
     * @param string $loginEnseignant
     * @return Enseignant
     */
    public function setLoginEnseignant($loginEnseignant)
    {
        $this->loginEnseignant = $loginEnseignant;

        return $this;
    }

    /**
     * Get loginEnseignant
     *
     * @return string 
     */
    public function getLoginEnseignant()
    {
        return $this->loginEnseignant;
    }

    /**
     * Set passwordEnseignant
     *
     * @param string $passwordEnseignant
     * @return Enseignant
     */
    public function setPasswordEnseignant($passwordEnseignant)
    {
        $this->passwordEnseignant = $passwordEnseignant;

        return $this;
    }

    /**
     * Get passwordEnseignant
     *
     * @return string 
     */
    public function getPasswordEnseignant()
    {
        return $this->passwordEnseignant;
    }

    /**
     * Set matriculeEnseignant
     *
     * @param string $matriculeEnseignant
     * @return Enseignant
     */
    public function setMatriculeEnseignant($matriculeEnseignant)
    {
        $this->matriculeEnseignant = $matriculeEnseignant;

        return $this;
    }

    /**
     * Get matriculeEnseignant
     *
     * @return string 
     */
    public function getMatriculeEnseignant()
    {
        return $this->matriculeEnseignant;
    }
}
