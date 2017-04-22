<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class MethodNotAllowedException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-METHOD-NOT-ALLOWED'): void
    {
        parent::__construct($message, $errorCode, 405);
    }
}
