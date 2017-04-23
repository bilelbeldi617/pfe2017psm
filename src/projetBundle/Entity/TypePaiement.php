<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePaiement
 *
 * @ORM\Table(name="type_paiement")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\TypePaiementRepository")
 */
class TypePaiement
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
     * @ORM\ManyToOne(targetEntity="Tranche", cascade={"remove"})
     *
     */
    private $tranche;

    /**
     * @var string
     *
     * @ORM\Column(name="typePaiement", type="string", length=50)
     */
    private $typePaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="preuve", type="integer", nullable=true)
     */
    private $preuve;
    /**
     * @var string
     *
     * @ORM\Column(name="nomBanque", type="string", length=255, nullable=true)
     */
    private $nomBanque;
    /**
     * @var int
     *
     * @ORM\Column(name="numeroCheque", type="integer", nullable=true)
     */
    private $numeroCheque;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePaiement", type="date")
     */
    private $datePaiement;

    /**
     * @return mixed
     */
    public function getTranche()
    {
        return $this->tranche;
    }

    /**
     * @param mixed $tranche
     */
    public function setTranche($tranche)
    {
        $this->tranche = $tranche;
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
     * Get typePaiement
     *
     * @return string
     */
    public function getTypePaiement()
    {
        return $this->typePaiement;
    }

    /**
     * Set typePaiement
     *
     * @param string $typePaiement
     * @return TypePaiement
     */
    public function setTypePaiement($typePaiement)
    {
        $this->typePaiement = $typePaiement;

        return $this;
    }

    /**
     * Get preuve
     *
     * @return integer
     */
    public function getPreuve()
    {
        return $this->preuve;
    }

    /**
     * Set preuve
     *
     * @param integer $preuve
     * @return TypePaiement
     */
    public function setPreuve($preuve)
    {
        $this->preuve = $preuve;

        return $this;
    }

    /**
     * Get nomBanque
     *
     * @return string
     */
    public function getNomBanque()
    {
        return $this->nomBanque;
    }

    /**
     * Set nomBanque
     *
     * @param string $nomBanque
     * @return TypePaiement
     */
    public function setNomBanque($nomBanque)
    {
        $this->nomBanque = $nomBanque;

        return $this;
    }

    /**
     * Get numeroCheque
     *
     * @return integer
     */
    public function getNumeroCheque()
    {
        return $this->numeroCheque;
    }

    /**
     * Set numeroCheque
     *
     * @param integer $numeroCheque
     * @return TypePaiement
     */
    public function setNumeroCheque($numeroCheque)
    {
        $this->numeroCheque = $numeroCheque;

        return $this;
    }

    /**
     * Get datePaiement
     *
     * @return \DateTime
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * Set datePaiement
     *
     * @param \DateTime $datePaiement
     * @return TypePaiement
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }
}
