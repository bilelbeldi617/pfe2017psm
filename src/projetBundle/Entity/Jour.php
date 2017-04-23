<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jour
 *
 * @ORM\Table(name="jour")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\JourRepository")
 */
class Jour
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
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumn(name="emploi", referencedColumnName="id")
     *
     */
    private $emploi;
    /**
     * @var string
     *
     * @ORM\Column(name="nom_jour", type="string", length=50)
     */
    private $nomJour;
    /**
     * @var string
     *
     * @ORM\Column(name="horaire", type="string", length=50)
     */
    private $horaire;

    /**
     * @return mixed
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * @param mixed $salle
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }

    /**
     * @return mixed
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * @param mixed $matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }

    /**
     * @return mixed
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * @param mixed $enseignant
     */
    public function setEnseignant($enseignant)
    {
        $this->enseignant = $enseignant;
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
     * Get nomJour
     *
     * @return string
     */
    public function getNomJour()
    {
        return $this->nomJour;
    }

    /**
     * Set nomJour
     *
     * @param string $nomJour
     * @return Jour
     */
    public function setNomJour($nomJour)
    {
        $this->nomJour = $nomJour;

        return $this;
    }

    /**
     * Get horaire
     *
     * @return string
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * Set horaire
     *
     * @param string $horaire
     * @return Jour
     */
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;

        return $this;
    }
}
