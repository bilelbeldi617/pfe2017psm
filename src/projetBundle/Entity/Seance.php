<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seance
 *
 * @ORM\Table(name="seance")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\SeanceRepository")
 */
class Seance
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
     * @ORM\Column(name="horaire_seance", type="time")
     */
    private $horaireSeance;


    /**
     * @ORM\ManyToOne(targetEntity="Salle")
     *
     */
    private $salle;

    /**
     * @ORM\ManyToOne(targetEntity="Enseignant")
     *
     */
    private $enseignant;

    /**
     * @ORM\ManyToOne(targetEntity="Matiere")
     *
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="Jour")
     *
     */
    private $jour;


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
     * Get horaireSeance
     *
     * @return \DateTime
     */
    public function getHoraireSeance()
    {
        return $this->horaireSeance;
    }

    /**
     * Set horaireSeance
     *
     * @param \DateTime $horaireSeance
     * @return Seance
     */
    public function setHoraireSeance($horaireSeance)
    {
        $this->horaireSeance = $horaireSeance;

        return $this;
    }
}
