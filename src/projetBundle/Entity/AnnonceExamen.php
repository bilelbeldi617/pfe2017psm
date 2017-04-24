<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnnonceExamen
 *
 * @ORM\Table(name="annonce_examen")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\AnnonceExamenRepository")
 */
class AnnonceExamen
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_examen", type="date")
     */
    private $dateExamen;

    /**
     * @ORM\ManyToOne(targetEntity="Groupe")
     *
     */
    private $groupe ;

    /**
     * @ORM\ManyToOne(targetEntity="Salle")
     *
     */
    private $salle ;

    /**
     * @ORM\ManyToOne(targetEntity="Enseignant")
     *
     */
    private $enseignant ;

    /**
     * @ORM\ManyToOne(targetEntity="Matiere")
     *
     */
    private $matiere ;



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
     * Set dateExamen
     *
     * @param \DateTime $dateExamen
     * @return AnnonceExamen
     */
    public function setDateExamen($dateExamen)
    {
        $this->dateExamen = $dateExamen;

        return $this;
    }

    /**
     * Get dateExamen
     *
     * @return \DateTime 
     */
    public function getDateExamen()
    {
        return $this->dateExamen;
    }
}
