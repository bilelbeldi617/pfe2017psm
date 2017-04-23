<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poste
 *
 * @ORM\Table(name="poste")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\PosteRepository")
 */
class Poste
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
     * @ORM\Column(name="titre_poste", type="string", length=50)
     */
    private $titrePoste;

    /**
     * @var int
     *
     * @ORM\Column(name="salaire_poste", type="integer")
     */
    private $salairePoste;


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
     * Get titrePoste
     *
     * @return string
     */
    public function getTitrePoste()
    {
        return $this->titrePoste;
    }

    /**
     * Set titrePoste
     *
     * @param string $titrePoste
     * @return Poste
     */
    public function setTitrePoste($titrePoste)
    {
        $this->titrePoste = $titrePoste;

        return $this;
    }

    /**
     * Get salairePoste
     *
     * @return integer
     */
    public function getSalairePoste()
    {
        return $this->salairePoste;
    }

    /**
     * Set salairePoste
     *
     * @param integer $salairePoste
     * @return Poste
     */
    public function setSalairePoste($salairePoste)
    {
        $this->salairePoste = $salairePoste;

        return $this;
    }
}
