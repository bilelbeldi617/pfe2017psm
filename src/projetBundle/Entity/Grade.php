<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grade
 *
 * @ORM\Table(name="grade")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\GradeRepository")
 */
class Grade
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
     * @ORM\Column(name="nom_grade", type="string", length=50)
     */
    private $nomGrade;

    /**
     * @var int
     *
     * @ORM\Column(name="salaire_grade", type="integer")
     */
    private $salaireGrade;


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
     * Set nomGrade
     *
     * @param string $nomGrade
     * @return Grade
     */
    public function setNomGrade($nomGrade)
    {
        $this->nomGrade = $nomGrade;

        return $this;
    }

    /**
     * Get nomGrade
     *
     * @return string 
     */
    public function getNomGrade()
    {
        return $this->nomGrade;
    }

    /**
     * Set salaireGrade
     *
     * @param integer $salaireGrade
     * @return Grade
     */
    public function setSalaireGrade($salaireGrade)
    {
        $this->salaireGrade = $salaireGrade;

        return $this;
    }

    /**
     * Get salaireGrade
     *
     * @return integer 
     */
    public function getSalaireGrade()
    {
        return $this->salaireGrade;
    }
}
