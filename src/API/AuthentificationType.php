<?php

namespace ParcelOneShipping\API;

class AuthentificationType
{
    /**
     * @var Username $Username
     * @access public
     */
    public $Username = null;

    /**
     * @var Password $Password
     * @access public
     */
    public $Password = null;


    /**
     * @param user $user
     * @param signature $signature
     * @access public
     */
    public function __construct($Username, $Password)
    {
      $this->Username = $Username;
      $this->Password = $Password;
    }

}
