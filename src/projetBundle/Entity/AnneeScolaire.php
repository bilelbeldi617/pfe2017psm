<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnneeScolaire
 *
 * @ORM\Table(name="annee_scolaire")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\AnneeScolaireRepository")
 */
class AnneeScolaire
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
     * @ORM\Column(name="periode", type="string", length=20)
     */
    private $periode;

    /**
     * @var int
     *
     * @ORM\Column(name="courante", type="integer")
     */
    private $courante;

    /**
     * @return int
     */
    public function getCourante()
    {
        return $this->courante;
    }

    /**
     * @param int $courante
     */
    public function setCourante($courante)
    {
        $this->courante = $courante;
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
     * Get periode
     *
     * @return string
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set periode
     *
     * @param string $periode
     * @return AnneeScolaire
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }
}
