<?php

namespace App\Exceptions;

use Exception;

class CustomerCreatedFailException extends Exception
{
    /**
     * 
     * @param string $message
     */
    public function __construct($message = 'Customer Fail Created')
    {
        parent::__construct($message);
    }
}
