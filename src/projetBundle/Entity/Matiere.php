<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\MatiereRepository")
 */
class Matiere
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
     * @ORM\ManyToOne(targetEntity="Enseignant")
     *
     */
    private $enseignant ;


    /**
     * @ORM\ManyToOne(targetEntity="Groupe")
     *
     */
    private $groupe ;

    /**
     * @ORM\ManyToOne(targetEntity="AnneeScolaire")
     *
     */
    private $anneeScolaire ;

    /**
     * @return mixed
     */
    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }

    /**
     * @param mixed $anneeScolaire
     */
    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;
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
     * @var string
     *
     * @ORM\Column(name="libelle_matiere", type="string", length=50)
     */
    private $libelleMatiere;


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
     * Set libelleMatiere
     *
     * @param string $libelleMatiere
     * @return Matiere
     */
    public function setLibelleMatiere($libelleMatiere)
    {
        $this->libelleMatiere = $libelleMatiere;

        return $this;
    }

    /**
     * Get libelleMatiere
     *
     * @return string 
     */
    public function getLibelleMatiere()
    {
        return $this->libelleMatiere;
    }
}
