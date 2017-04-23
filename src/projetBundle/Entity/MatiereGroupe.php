<?php
/**
 * Created by PhpStorm.
 * User: Chaouki
 * Date: 14/04/2017
 * Time: 23:01
 */

namespace projetBundle\Entity;


class MatiereGroupe
{

    private $groupe;
    private $matiere;

    /**
     * @return mixed
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * @param mixed $groupe
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;
    }

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


}