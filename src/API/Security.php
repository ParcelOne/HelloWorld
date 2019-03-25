<?php

namespace HelloWorld\API;

class Security
{
    /**
     * @var Security $UsernameToken
     * @access public
     */
    public $Security = null;

    public function __construct($Security)
    {
      $this->Security = $Security;
    }

}
