<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageRegistre
 *
 * @ORM\Table(name="page_registre")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\PageRegistreRepository")
 */
class PageRegistre
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
     * @ORM\JoinColumn(name="registre", referencedColumnName="id")
     *
     */
    private $registre ;

    /**
     * @ORM\ManyToOne(targetEntity="Eleve")
     *
     */
    private $eleve ;


    /**
     * @ORM\ManyToOne(targetEntity="Matiere")
     *
     */
    private $matiere ;


    /**
     * @var string
     *
     * @ORM\Column(name="horaire_absence", type="string", length=100)
     */
    private $horaireAbsence;

    /**
     * @return date
     */
    public function getDateAbsence()
    {
        return $this->dateAbsence;
    }

    /**
     * @param date $dateAbsence
     */
    public function setDateAbsence($dateAbsence)
    {
        $this->dateAbsence = $dateAbsence;
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
     * @return string
     */
    public function getHoraireAbsence()
    {
        return $this->horaireAbsence;
    }

    /**
     * @param string $horaireAbsence
     */
    public function setHoraireAbsence($horaireAbsence)
    {
        $this->horaireAbsence = $horaireAbsence;
    }

    /**
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
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
     * @var date
     *
     * @ORM\Column(name="date_absence", type="date")
     */
    private $dateAbsence;


    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=100)
     */
    private $etat;


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
