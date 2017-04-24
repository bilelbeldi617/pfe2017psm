<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tranche
 *
 * @ORM\Table(name="tranche")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\TrancheRepository")
 */
class Tranche
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
     * @ORM\ManyToOne(targetEntity="Paiement", cascade={"remove"})
     *
     */
    private $paiement ;

    /**
     * @return mixed
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * @param mixed $paiement
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="numero_tranche", type="integer")
     */
    private $numeroTranche;

    /**
     * @var int
     *
     * @ORM\Column(name="montant_tranche", type="integer")
     */
    private $montantTranche;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_tranche", type="string", length=50)
     */
    private $etatTranche;


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
     * Set numeroTranche
     *
     * @param integer $numeroTranche
     * @return Tranche
     */
    public function setNumeroTranche($numeroTranche)
    {
        $this->numeroTranche = $numeroTranche;

        return $this;
    }

    /**
     * Get numeroTranche
     *
     * @return integer 
     */
    public function getNumeroTranche()
    {
        return $this->numeroTranche;
    }

    /**
     * Set montantTranche
     *
     * @param integer $montantTranche
     * @return Tranche
     */
    public function setMontantTranche($montantTranche)
    {
        $this->montantTranche = $montantTranche;

        return $this;
    }

    /**
     * Get montantTranche
     *
     * @return integer 
     */
    public function getMontantTranche()
    {
        return $this->montantTranche;
    }

    /**
     * Set etatTranche
     *
     * @param string $etatTranche
     * @return Tranche
     */
    public function setEtatTranche($etatTranche)
    {
        $this->etatTranche = $etatTranche;

        return $this;
    }

    /**
     * Get etatTranche
     *
     * @return string 
     */
    public function getEtatTranche()
    {
        return $this->etatTranche;
    }
}
