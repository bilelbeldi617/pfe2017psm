<?php

namespace Proxies\__CG__\projetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Groupe extends \projetBundle\Entity\Groupe implements \Doctrine\ORM\Proxy\Proxy
{
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
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'id', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'anneeScolaire', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'emploi', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'registre', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'cahier', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'numGroupe', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'nomGroupe', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'nbrEleves', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'niveauGroupe');
        }

        return array('__isInitialized__', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'id', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'anneeScolaire', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'emploi', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'registre', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'cahier', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'numGroupe', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'nomGroupe', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'nbrEleves', '' . "\0" . 'projetBundle\\Entity\\Groupe' . "\0" . 'niveauGroupe');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Groupe $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
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
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
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
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getAnneeScolaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnneeScolaire', array());

        return parent::getAnneeScolaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnneeScolaire($anneeScolaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnneeScolaire', array($anneeScolaire));

        return parent::setAnneeScolaire($anneeScolaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getCahier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCahier', array());

        return parent::getCahier();
    }

    /**
     * {@inheritDoc}
     */
    public function setCahier($cahier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCahier', array($cahier));

        return parent::setCahier($cahier);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmploi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmploi', array());

        return parent::getEmploi();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmploi($emploi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmploi', array($emploi));

        return parent::setEmploi($emploi);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistre', array());

        return parent::getRegistre();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistre($registre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistre', array($registre));

        return parent::setRegistre($registre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveauGroupe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveauGroupe', array());

        return parent::getNiveauGroupe();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveauGroupe($niveauGroupe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveauGroupe', array($niveauGroupe));

        return parent::setNiveauGroupe($niveauGroupe);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrEleves()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrEleves', array());

        return parent::getNbrEleves();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrEleves($nbrEleves)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrEleves', array($nbrEleves));

        return parent::setNbrEleves($nbrEleves);
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumGroupe($numGroupe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumGroupe', array($numGroupe));

        return parent::setNumGroupe($numGroupe);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumGroupe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumGroupe', array());

        return parent::getNumGroupe();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomGroupe($nomGroupe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomGroupe', array($nomGroupe));

        return parent::setNomGroupe($nomGroupe);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomGroupe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomGroupe', array());

        return parent::getNomGroupe();
    }

}
