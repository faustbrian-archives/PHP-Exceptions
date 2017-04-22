<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NetworkAuthenticationRequiredException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-NETWORK-AUTHENTICATION-REQUIRED'): void
    {
        parent::__construct($message, $errorCode, 511);
    }
}
