<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Hotel extends \App\Entity\Hotel implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'idh', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'nomhotel', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'nbEtoile', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'site', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'gouvernorat', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'price'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'idh', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'nomhotel', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'nbEtoile', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'site', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'gouvernorat', '' . "\0" . 'App\\Entity\\Hotel' . "\0" . 'price'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Hotel $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(int $price): \App\Entity\Hotel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdh(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdh();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdh', []);

        return parent::getIdh();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomhotel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomhotel', []);

        return parent::getNomhotel();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomhotel(string $nomhotel): \App\Entity\Hotel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomhotel', [$nomhotel]);

        return parent::setNomhotel($nomhotel);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbEtoile(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbEtoile', []);

        return parent::getNbEtoile();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbEtoile(int $nbEtoile): \App\Entity\Hotel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbEtoile', [$nbEtoile]);

        return parent::setNbEtoile($nbEtoile);
    }

    /**
     * {@inheritDoc}
     */
    public function getSite(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', []);

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setSite(string $site): \App\Entity\Hotel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSite', [$site]);

        return parent::setSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): \App\Entity\Hotel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getGouvernorat(): ?\App\Entity\Gouvernorat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGouvernorat', []);

        return parent::getGouvernorat();
    }

    /**
     * {@inheritDoc}
     */
    public function setGouvernorat(?\App\Entity\Gouvernorat $gouvernorat): \App\Entity\Hotel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGouvernorat', [$gouvernorat]);

        return parent::setGouvernorat($gouvernorat);
    }

}
