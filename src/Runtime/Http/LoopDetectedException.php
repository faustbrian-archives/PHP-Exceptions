<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class LoopDetectedException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-LOOP-DETECTED')
    {
        parent::__construct($message, $errorCode, 508);
    }
}
