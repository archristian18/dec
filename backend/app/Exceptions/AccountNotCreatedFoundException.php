<?php

namespace App\Exceptions;

use Exception;

class AccountNotCreatedFoundException extends Exception
{
    /**
     * 
     * @param string $message
     */
    public function __construct($message = 'Empty Account')
    {
        parent::__construct($message);
    }
}
