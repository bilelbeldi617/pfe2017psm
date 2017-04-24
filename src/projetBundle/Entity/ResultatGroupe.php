<?php
/**
 * Created by PhpStorm.
 * User: bilelbeldi617
 * Date: 4/12/2017
 * Time: 1:48 AM
 */

namespace projetBundle\Entity;


class ResultatGroupe {
    private $eleve ;
    private $moyenneGeneral ;

    /**
     * @return mixed
     */
    public function getMoyenneGeneral()
    {
        return $this->moyenneGeneral;
    }

    /**
     * @param mixed $moyenneGeneral
     */
    public function setMoyenneGeneral($moyenneGeneral)
    {
        $this->moyenneGeneral = $moyenneGeneral;
    }
    private $listResultat ;

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
    public function getListResultat()
    {
        return $this->listResultat;
    }

    /**
     * @param mixed $listResultat
     */
    public function setListResultat($listResultat)
    {
        $this->listResultat = $listResultat;
    }

} 