<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @ORM\ManyToOne(targetEntity="AnneeScolaire")
     *
     */
    private $anneeScolaire;
    /**
     * @var string
     *
     * @ORM\Column(name="etat_paiement", type="string", length=50)
     */
    private $etatPaiement;
    /**
     * @var int
     *
     * @ORM\Column(name="totale_paiement", type="integer")
     */
    private $totalePaiement;
    /**
     * @var string
     *
     * @ORM\Column(name="frais_paiement", type="string", length=255)
     */
    private $fraisPaiement;
    /**
     * @ORM\ManyToOne(targetEntity="Eleve", cascade={"remove"})
     *
     */
    private $eleve;

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
     * @return string
     */
    public function getFraisPaiement()
    {
        return $this->fraisPaiement;
    }

    /**
     * @param string $fraisPaiement
     */
    public function setFraisPaiement($fraisPaiement)
    {
        $this->fraisPaiement = $fraisPaiement;
    }

    /**
     * @return int
     */
    public function getTotalePaiement()
    {
        return $this->totalePaiement;
    }

    /**
     * @param int $totalePaiement
     */
    public function setTotalePaiement($totalePaiement)
    {
        $this->totalePaiement = $totalePaiement;
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

    /**
     * Get etatPaiement
     *
     * @return string
     */
    public function getEtatPaiement()
    {
        return $this->etatPaiement;
    }

    /**
     * Set etatPaiement
     *
     * @param string $etatPaiement
     * @return Paiement
     */
    public function setEtatPaiement($etatPaiement)
    {
        $this->etatPaiement = $etatPaiement;

        return $this;
    }
}
