<?php

namespace HelloWorld\Services;

use Plenty\Modules\Frontend\Session\Storage\Contracts\FrontendSessionStorageFactoryContract;

/**
 * Class SessionStorageService
 * @package HelloWorld\Services
 */
class SessionStorageService
{
    /**
     * @var FrontendSessionStorageFactoryContract
     */
    private $sessionStorage;

    /**
     * SessionStorageService constructor.
     * @param FrontendSessionStorageFactoryContract $sessionStorage
     */
    public function __construct(FrontendSessionStorageFactoryContract $sessionStorage)
    {
        $this->sessionStorage = $sessionStorage;
    }

    /**
     * Set the session value
     *
     * @param string $name
     * @param $value
     */
    public function setSessionValue(string $name, $value)
    {
        $this->sessionStorage->getPlugin()->setValue($name, $value);
    }

    /**
     * Get the session value
     *
     * @param string $name
     * @return mixed
     */
    public function getSessionValue(string $name)
    {
        return $this->sessionStorage->getPlugin()->getValue($name);
    }

    /**
     * Unset the session key
     *
     * @param string $name
     * @return mixed
     */
    public function unsetKey(string $name)
    {
        return $this->sessionStorage->getPlugin()->unsetKey($name);
    }
}
