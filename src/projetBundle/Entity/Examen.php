<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="examen")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\ExamenRepository")
 */
class Examen
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
     * @ORM\ManyToOne(targetEntity="Matiere", cascade={"remove"})
     *
     */
    private $matiere ;

    /**
     * @ORM\ManyToOne(targetEntity="Eleve")
     *
     */
    private $eleve ;

    /**
     * @ORM\ManyToOne(targetEntity="AnneeScolaire")
     *
     */
    private $anneeScolaire ;


    /**
     * @var float
     * @ORM\Column(name="note_examen", type="float")
     */
    private $noteExamen;

    /**
     * @var int
     * @ORM\Column(name="trimestre_examen", type="integer")
     */
    private $trimestreExamen;






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
     * @return int
     */
    public function getTrimestreExamen()
    {
        return $this->trimestreExamen;
    }

    /**
     * @param int $trimestreExamen
     */
    public function setTrimestreExamen($trimestreExamen)
    {
        $this->trimestreExamen = $trimestreExamen;
    }

    /**
     * @return float
     */
    public function getNoteExamen()
    {
        return $this->noteExamen;
    }

    /**
     * @param float $noteExamen
     */
    public function setNoteExamen($noteExamen)
    {
        $this->noteExamen = $noteExamen;
    }

    /**
     * @return mixed
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * @param mixed $eleve
     */
    public function setEleve($eleve)
    {
        $this->eleve = $eleve;
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
