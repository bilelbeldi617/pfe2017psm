<?php
/**
 * Created by PhpStorm.
 * User: bilelbeldi617
 * Date: 4/15/2017
 * Time: 11:16 PM
 */

namespace projetBundle\Entity;


class AllPayements {


    private $frais;
    private $etat;
    private $anneeScolaire;
    private $trimestre;

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
    public function getTrimestre()
    {
        return $this->trimestre;
    }

    /**
     * @param mixed $trimestre
     */
    public function setTrimestre($trimestre)
    {
        $this->trimestre = $trimestre;
    }





    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getFrais()
    {
        return $this->frais;
    }

    /**
     * @param mixed $frais
     */
    public function setFrais($frais)
    {
        $this->frais = $frais;
    }
} 