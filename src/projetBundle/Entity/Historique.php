<?php
/**
 * Created by PhpStorm.
 * User: bilelbeldi617
 * Date: 4/14/2017
 * Time: 12:33 AM
 */

namespace projetBundle\Entity;


class Historique {
    private $anneeScolaire;
    private $trimestres;
    private  $resultat;
    private $eleve;
    private  $moyenneGenerale;

    /**
     * @return mixed
     */
    public function getMoyenneGenerale()
    {
        return $this->moyenneGenerale;
    }

    /**
     * @param mixed $moyenneGenerale
     */
    public function setMoyenneGenerale($moyenneGenerale)
    {
        $this->moyenneGenerale = $moyenneGenerale;
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
     * @return mixed
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * @param mixed $resultat
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;
    }

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
     * @return mixed
     */
    public function getTrimestres()
    {
        return $this->trimestres;
    }

    /**
     * @param mixed $trimestres
     */
    public function setTrimestres($trimestres)
    {
        $this->trimestres = $trimestres;
    }


} 