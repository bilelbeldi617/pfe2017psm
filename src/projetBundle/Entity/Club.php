<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\ClubRepository")
 */
class Club
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
     * @ORM\ManyToMany(targetEntity="Eleve", mappedBy="clubs")
     */
    private $eleves;
    /**
     * @var string
     *
     * @ORM\Column(name="titre_club", type="string", length=100)
     */
    private $titreClub;
    /**
     * @var int
     *
     * @ORM\Column(name="nombre_adherant", type="integer")
     */
    private $nombreAdherant;

    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getEleves()
    {
        return $this->eleves;
    }

    /**
     * @param mixed $eleves
     */
    public function setEleves($eleves)
    {
        $this->eleves = $eleves;
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
     * Get titreClub
     *
     * @return string
     */
    public function getTitreClub()
    {
        return $this->titreClub;
    }

    /**
     * Set titreClub
     *
     * @param string $titreClub
     * @return Club
     */
    public function setTitreClub($titreClub)
    {
        $this->titreClub = $titreClub;

        return $this;
    }

    /**
     * Get nombreAdherant
     *
     * @return integer
     */
    public function getNombreAdherant()
    {
        return $this->nombreAdherant;
    }

    /**
     * Set nombreAdherant
     *
     * @param integer $nombreAdherant
     * @return Club
     */
    public function setNombreAdherant($nombreAdherant)
    {
        $this->nombreAdherant = $nombreAdherant;

        return $this;
    }
}
