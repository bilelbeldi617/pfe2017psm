<?php
/**
 * Created by PhpStorm.
 * User: bilelbeldi617
 * Date: 4/16/2017
 * Time: 5:27 PM
 */

namespace projetBundle\Entity;


class Resultat2
{
    private $moyenne;
    private $matiere;
    private $note;
    private $nomEnseignant;
    private $trimestre;

    /**
     * @return mixed
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * @param mixed $matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }

    /**
     * @return mixed
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * @param mixed $moyenne
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;
    }

    /**
     * @return mixed
     */
    public function getNomEnseignant()
    {
        return $this->nomEnseignant;
    }

    /**
     * @param mixed $nomEnseignant
     */
    public function setNomEnseignant($nomEnseignant)
    {
        $this->nomEnseignant = $nomEnseignant;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
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

} 