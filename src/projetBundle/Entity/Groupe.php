<?php

namespace projetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations\Annotation;
use projetBundle\Entity\Emploi;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="projetBundle\Repository\GroupeRepository")
 */
class Groupe
{


    /**
     * @ORM\ManyToOne(targetEntity="AnneeScolaire")
     */
    private $anneeScolaire;

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
    private $nombreEleve ;

    /**
     * @return mixed
     */
    public function getNombreEleve()
    {
        return $this->nombreEleve;
    }

    /**
     * @param mixed $nombreEleve
     */
    public function setNombreEleve($nombreEleve)
    {
        $this->nombreEleve = $nombreEleve;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * use projetBundle\Entity\Emploi;
     * @ORM\OneToOne(targetEntity="Emploi", inversedBy="groupe")
     * @ORM\JoinColumn(name="emploi_id", referencedColumnName="id")
     */
    private $emploi;

    /**
     * use projetBundle\Entity\Registre;
     * @ORM\OneToOne(targetEntity="Registre", mappedBy="groupe")
     */
    private $registre;

    /**
     * use projetBundle\Entity\Cahier;
     * @ORM\OneToOne(targetEntity="Cahier", mappedBy="groupe")
     */
    private $cahier;

    /**
     * @return mixed
     */
    public function getCahier()
    {
        return $this->cahier;
    }

    /**
     * @param mixed $cahier
     */
    public function setCahier($cahier)
    {
        $this->cahier = $cahier;
    }

    /**
     * @return mixed
     */
    public function getEmploi()
    {
        return $this->emploi;
    }

    /**
     * @param mixed $emploi
     */
    public function setEmploi($emploi)
    {
        $this->emploi = $emploi;
    }

    /**
     * @return mixed
     */
    public function getRegistre()
    {
        return $this->registre;
    }

    /**
     * @param mixed $registre
     */
    public function setRegistre($registre)
    {
        $this->registre = $registre;
    }



    /**
     * @var int
     *
     * @ORM\Column(name="num_groupe", type="integer")
     */
    private $numGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_groupe", type="string", length=100)
     */
    private $nomGroupe;




    /**
     * @var int
     *
     * @ORM\Column(name="niveau_groupe", type="integer")
     */
    private $niveauGroupe;

    /**
     * @return int
     */
    public function getNiveauGroupe()
    {
        return $this->niveauGroupe;
    }

    /**
     * @param int $niveauGroupe
     */
    public function setNiveauGroupe($niveauGroupe)
    {
        $this->niveauGroupe = $niveauGroupe;
    }





    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set numGroupe
     *
     * @param integer $numGroupe
     * @return Groupe
     */
    public function setNumGroupe($numGroupe)
    {
        $this->numGroupe = $numGroupe;

        return $this;
    }

    /**
     * Get numGroupe
     *
     * @return integer 
     */
    public function getNumGroupe()
    {
        return $this->numGroupe;
    }

    /**
     * Set nomGroupe
     *
     * @param string $nomGroupe
     * @return Groupe
     */
    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    /**
     * Get nomGroupe
     *
     * @return string 
     */
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }
}
