<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonnelAdministratif
 *
 * @ORM\Table(name="personnel_administratif")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\PersonnelAdministratifRepository")
 */
class PersonnelAdministratif
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
     * @ORM\Column(name="matricule_pa", type="string", length=255)
     */
    private $matriculePa;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pa", type="string", length=25)
     */
    private $nomPa;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_pa", type="string", length=25)
     */
    private $prenomPa;

    /**
     * @var string
     *
     * @ORM\Column(name="numTel_pa", type="string", length=20)
     */
    private $numTelPa;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_pa", type="string", length=100)
     */
    private $adressePa;

    /**
     * @var int
     *
     * @ORM\Column(name="cin_pa", type="integer", unique=true)
     */
    private $cinPa;

    /**
     * @var string
     *
     * @ORM\Column(name="login_pa", type="string", length=50, unique=true)
     */
    private $loginPa;

    /**
     * @var string
     *
     * @ORM\Column(name="password_pa", type="string", length=255)
     */
    private $passwordPa;


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
     * Get matriculePa
     *
     * @return string
     */
    public function getMatriculePa()
    {
        return $this->matriculePa;
    }

    /**
     * Set matriculePa
     *
     * @param string $matriculePa
     * @return PersonnelAdministratif
     */
    public function setMatriculePa($matriculePa)
    {
        $this->matriculePa = $matriculePa;

        return $this;
    }

    /**
     * Get nomPa
     *
     * @return string
     */
    public function getNomPa()
    {
        return $this->nomPa;
    }

    /**
     * Set nomPa
     *
     * @param string $nomPa
     * @return PersonnelAdministratif
     */
    public function setNomPa($nomPa)
    {
        $this->nomPa = $nomPa;

        return $this;
    }

    /**
     * Get prenomPa
     *
     * @return string
     */
    public function getPrenomPa()
    {
        return $this->prenomPa;
    }

    /**
     * Set prenomPa
     *
     * @param string $prenomPa
     * @return PersonnelAdministratif
     */
    public function setPrenomPa($prenomPa)
    {
        $this->prenomPa = $prenomPa;

        return $this;
    }

    /**
     * Get numTelPa
     *
     * @return string
     */
    public function getNumTelPa()
    {
        return $this->numTelPa;
    }

    /**
     * Set numTelPa
     *
     * @param string $numTelPa
     * @return PersonnelAdministratif
     */
    public function setNumTelPa($numTelPa)
    {
        $this->numTelPa = $numTelPa;

        return $this;
    }

    /**
     * Get adressePa
     *
     * @return string
     */
    public function getAdressePa()
    {
        return $this->adressePa;
    }

    /**
     * Set adressePa
     *
     * @param string $adressePa
     * @return PersonnelAdministratif
     */
    public function setAdressePa($adressePa)
    {
        $this->adressePa = $adressePa;

        return $this;
    }

    /**
     * Get cinPa
     *
     * @return integer
     */
    public function getCinPa()
    {
        return $this->cinPa;
    }

    /**
     * Set cinPa
     *
     * @param integer $cinPa
     * @return PersonnelAdministratif
     */
    public function setCinPa($cinPa)
    {
        $this->cinPa = $cinPa;

        return $this;
    }

    /**
     * Get loginPa
     *
     * @return string
     */
    public function getLoginPa()
    {
        return $this->loginPa;
    }

    /**
     * Set loginPa
     *
     * @param string $loginPa
     * @return PersonnelAdministratif
     */
    public function setLoginPa($loginPa)
    {
        $this->loginPa = $loginPa;

        return $this;
    }

    /**
     * Get passwordPa
     *
     * @return string
     */
    public function getPasswordPa()
    {
        return $this->passwordPa;
    }

    /**
     * Set passwordPa
     *
     * @param string $passwordPa
     * @return PersonnelAdministratif
     */
    public function setPasswordPa($passwordPa)
    {
        $this->passwordPa = $passwordPa;

        return $this;
    }
}
