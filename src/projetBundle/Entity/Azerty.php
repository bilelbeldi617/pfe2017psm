<?php
/**
 * Created by PhpStorm.
 * User: bilelbeldi617
 * Date: 4/18/2017
 * Time: 6:39 PM
 */

namespace projetBundle\Entity;


class Azerty {
 private $testVar ;
    private $chaouki ;
    private $bilel ;

    /**
     * @return mixed
     */
    public function getBilel()
    {
        return $this->bilel;
    }

    /**
     * @param mixed $bilel
     */
    public function setBilel($bilel)
    {
        $this->bilel = $bilel;
    }

    /**
     * @return mixed
     */
    public function getChaouki()
    {
        return $this->chaouki;
    }

    /**
     * @param mixed $chaouki
     */
    public function setChaouki($chaouki)
    {
        $this->chaouki = $chaouki;
    }

    /**
     * @return mixed
     */
    public function getTestVar()
    {
        return $this->testVar;
    }

    /**
     * @param mixed $testVar
     */
    public function setTestVar($testVar)
    {
        $this->testVar = $testVar;
    }
} 