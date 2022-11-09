<?php

namespace App\Exceptions;

use Exception;

class CustomerNotFoundException extends Exception
{
    /**
     * customer
     * @param string $message
     * 
     */
    public function __construct($message = 'Customer Not Found')
    {
        parent::__construct($message);
    }
}
