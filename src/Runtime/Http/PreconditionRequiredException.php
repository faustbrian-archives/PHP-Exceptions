<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class PreconditionRequiredException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-PRECONDITION-REQUIRED')
    {
        parent::__construct($message, $errorCode, 428);
    }
}
