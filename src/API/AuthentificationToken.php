<?php

namespace HelloWorld\API;

class AuthentificationToken
{
    /**
     * @var UsernameToken $UsernameToken
     * @access public
     */
    public $UsernameToken = null;

    public function __construct($UsernameToken)
    {
      $this->UsernameToken = $UsernameToken;
    }

}
