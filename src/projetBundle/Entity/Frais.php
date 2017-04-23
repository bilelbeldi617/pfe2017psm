<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frais
 *
 * @ORM\Table(name="frais")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\FraisRepository")
 */
class Frais
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
     * @ORM\Column(name="type_frais", type="string", length=100)
     */
    private $typeFrais;

    /**
     * @var int
     *
     * @ORM\Column(name="montant_frais", type="integer")
     */
    private $montantFrais;


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
     * Get typeFrais
     *
     * @return string
     */
    public function getTypeFrais()
    {
        return $this->typeFrais;
    }

    /**
     * Set typeFrais
     *
     * @param string $typeFrais
     * @return Frais
     */
    public function setTypeFrais($typeFrais)
    {
        $this->typeFrais = $typeFrais;

        return $this;
    }

    /**
     * Get montantFrais
     *
     * @return integer
     */
    public function getMontantFrais()
    {
        return $this->montantFrais;
    }

    /**
     * Set montantFrais
     *
     * @param integer $montantFrais
     * @return Frais
     */
    public function setMontantFrais($montantFrais)
    {
        $this->montantFrais = $montantFrais;

        return $this;
    }
}
