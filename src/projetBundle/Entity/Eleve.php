<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve
 *
 * @ORM\Table(name="eleve")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\EleveRepository")
 */
class Eleve
{


    private $paiement;
    /**
     * @var date
     *
     * @ORM\Column(name="date_naissance_eleve", type="date")
     */
    private $dateNaissanceEleve;
    /**
     * @ORM\ManyToMany(targetEntity="Club", inversedBy="eleves")
     * @ORM\JoinTable(name="adhesion")
     */
    private $clubs;
    /**
     * @ORM\ManyToOne(targetEntity="ParentEleve")
     *
     */
    private $parent;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    private $groupe;
    /**
     * @var string
     *
     * @ORM\Column(name="sexe_eleve", type="string", length=6)
     */
    private $sexeEleve;
    /**
     * @var int
     *
     * @ORM\Column(name="niveau_eleve", type="integer")
     */
    private $niveauEleve;
    /**
     * @var string
     *
     * @ORM\Column(name="nom_eleve", type="string", length=25)
     */
    private $nomEleve;
    /**
     * @var string
     *
     * @ORM\Column(name="prenom_eleve", type="string", length=25)
     */
    private $prenomEleve;
    /**
     * @var string
     *
     * @ORM\Column(name="matricule_eleve", type="string", length=10, unique=true)
     */
    private $matriculeEleve;

    public function __construct()
    {
        $this->clubs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * @param mixed $paiement
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return mixed
     */
    public function getClubs()
    {
        return $this->clubs;
    }

    /**
     * @param mixed $clubs
     */
    public function setClubs($clubs)
    {
        $this->clubs = $clubs;
    }

    /**
     * @return date
     */
    public function getDateNaissanceEleve()
    {
        return $this->dateNaissanceEleve;
    }

    /**
     * @param date $dateNaissanceEleve
     */
    public function setDateNaissanceEleve($dateNaissanceEleve)
    {
        $this->dateNaissanceEleve = $dateNaissanceEleve;
    }

    /**
     * @return mixed
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * @param mixed $groupe
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;
    }

    /**
     * @return int
     */
    public function getNiveauEleve()
    {
        return $this->niveauEleve;
    }

    /**
     * @param int $niveauEleve
     */
    public function setNiveauEleve($niveauEleve)
    {
        $this->niveauEleve = $niveauEleve;
    }

    /**
     * @return string
     */
    public function getSexeEleve()
    {
        return $this->sexeEleve;
    }

    /**
     * @param string $sexeEleve
     */
    public function setSexeEleve($sexeEleve)
    {
        $this->sexeEleve = $sexeEleve;
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
     * Get nomEleve
     *
     * @return string
     */
    public function getNomEleve()
    {
        return $this->nomEleve;
    }

    /**
     * Set nomEleve
     *
     * @param string $nomEleve
     * @return Eleve
     */
    public function setNomEleve($nomEleve)
    {
        $this->nomEleve = $nomEleve;

        return $this;
    }

    /**
     * Get prenomEleve
     *
     * @return string
     */
    public function getPrenomEleve()
    {
        return $this->prenomEleve;
    }

    /**
     * Set prenomEleve
     *
     * @param string $prenomEleve
     * @return Eleve
     */
    public function setPrenomEleve($prenomEleve)
    {
        $this->prenomEleve = $prenomEleve;

        return $this;
    }

    /**
     * Get matriculeEleve
     *
     * @return string
     */
    public function getMatriculeEleve()
    {
        return $this->matriculeEleve;
    }

    /**
     * Set matriculeEleve
     *
     * @param string $matriculeEleve
     * @return Eleve
     */
    public function setMatriculeEleve($matriculeEleve)
    {
        $this->matriculeEleve = $matriculeEleve;

        return $this;
    }

    /**
     * Add clubs
     *
     * @param \projetBundle\Entity\Club $clubs
     * @return Eleve
     */
    public function addClub(\projetBundle\Entity\Club $clubs)
    {
        $this->clubs[] = $clubs;

        return $this;
    }

    /**
     * Remove clubs
     *
     * @param \projetBundle\Entity\Club $clubs
     */
    public function removeClub(\projetBundle\Entity\Club $clubs)
    {
        $this->clubs->removeElement($clubs);
    }


}
