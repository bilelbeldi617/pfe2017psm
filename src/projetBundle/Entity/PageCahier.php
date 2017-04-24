<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageCahier
 *
 * @ORM\Table(name="page_cahier")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\PageCahierRepository")
 */
class PageCahier
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
     * @var datetime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Groupe")
     *
     */
    private $groupe;


    /**
     * @ORM\ManyToOne(targetEntity="Enseignant")
     *
     */
    private $enseignant;


    /**
     * @ORM\ManyToOne(targetEntity="AnneeScolaire")
     *
     */
    private $anneeScolaire;


    /**
     * @ORM\ManyToOne(targetEntity="Matiere")
     *
     */
    private $matiere;


    /**
     * @var text
     *
     * @ORM\Column(name="texte_page_cahier", type="text")
     */
    private $textePageCahier;


    /**
     * @return text
     */
    public function getTextePageCahier()
    {
        return $this->textePageCahier;
    }

    /**
     * @param text $textePageCahier
     */
    public function setTextePageCahier($textePageCahier)
    {
        $this->textePageCahier = $textePageCahier;
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
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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
