<?php

namespace App\Exceptions;

use Exception;

class LoginNotFoundException extends Exception
{
    /**
     * Login
     * @param string $message
     * 
     */
    public function __construct($message = 'Login user not found!')
    {
        parent::__construct($message);
    }
}
