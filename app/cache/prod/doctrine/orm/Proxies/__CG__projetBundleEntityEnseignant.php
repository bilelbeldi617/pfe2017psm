<?php

namespace Proxies\__CG__\projetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Enseignant extends \projetBundle\Entity\Enseignant implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;
    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;
    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__ = $cloner;
    }


    /**
     *
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'id', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'nomEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'grade', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'prenomEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'numTelEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'adresseEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'cinEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'emailEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'loginEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'passwordEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'matriculeEnseignant');
        }

        return array('__isInitialized__', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'id', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'nomEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'grade', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'prenomEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'numTelEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'adresseEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'cinEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'emailEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'loginEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'passwordEnseignant', '' . "\0" . 'projetBundle\\Entity\\Enseignant' . "\0" . 'matriculeEnseignant');
    }

    /**
     *
     */
    public function __wakeup()
    {
        if (!$this->__isInitialized__) {
            $this->__initializer__ = function (Enseignant $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if (!array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    /**
     *
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     */
    public function getGrade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrade', array());

        return parent::getGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrade($grade)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrade', array($grade));

        return parent::setGrade($grade);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomEnseignant($nomEnseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomEnseignant', array($nomEnseignant));

        return parent::setNomEnseignant($nomEnseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomEnseignant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomEnseignant', array());

        return parent::getNomEnseignant();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomEnseignant($prenomEnseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomEnseignant', array($prenomEnseignant));

        return parent::setPrenomEnseignant($prenomEnseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomEnseignant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomEnseignant', array());

        return parent::getPrenomEnseignant();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumTelEnseignant($numTelEnseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumTelEnseignant', array($numTelEnseignant));

        return parent::setNumTelEnseignant($numTelEnseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumTelEnseignant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumTelEnseignant', array());

        return parent::getNumTelEnseignant();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseEnseignant($adresseEnseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseEnseignant', array($adresseEnseignant));

        return parent::setAdresseEnseignant($adresseEnseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseEnseignant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseEnseignant', array());

        return parent::getAdresseEnseignant();
    }

    /**
     * {@inheritDoc}
     */
    public function setCinEnseignant($cinEnseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCinEnseignant', array($cinEnseignant));

        return parent::setCinEnseignant($cinEnseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getCinEnseignant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCinEnseignant', array());

        return parent::getCinEnseignant();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailEnseignant($emailEnseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailEnseignant', array($emailEnseignant));

        return parent::setEmailEnseignant($emailEnseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailEnseignant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailEnseignant', array());

        return parent::getEmailEnseignant();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginEnseignant($loginEnseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginEnseignant', array($loginEnseignant));

        return parent::setLoginEnseignant($loginEnseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginEnseignant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginEnseignant', array());

        return parent::getLoginEnseignant();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordEnseignant($passwordEnseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordEnseignant', array($passwordEnseignant));

        return parent::setPasswordEnseignant($passwordEnseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordEnseignant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordEnseignant', array());

        return parent::getPasswordEnseignant();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatriculeEnseignant($matriculeEnseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatriculeEnseignant', array($matriculeEnseignant));

        return parent::setMatriculeEnseignant($matriculeEnseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatriculeEnseignant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatriculeEnseignant', array());

        return parent::getMatriculeEnseignant();
    }

}
