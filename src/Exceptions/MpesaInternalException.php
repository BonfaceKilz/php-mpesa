<?php

namespace HackDelta\Mpesa\Exceptions;

use Exception;

/**
 * Indicates internal exceptions in the mpesa such as wrong parameter type
 * wrong mpesa identifier, this error can only occur before we make a request to the
 * MPesa gateway.
*/

class MpesaInternalException extends Exception
{
    public function __construct(string $message = "")
    {
        parent::__construct($message);
    }
}