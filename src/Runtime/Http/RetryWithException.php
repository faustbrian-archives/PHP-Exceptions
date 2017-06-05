<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class RetryWithException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-RETRY-WITH')
    {
        parent::__construct($message, $errorCode, 449);
    }
}
