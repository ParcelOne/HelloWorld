<?php

namespace HelloWorld\API;

class  UsernameToken
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
