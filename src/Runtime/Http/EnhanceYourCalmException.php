<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class EnhanceYourCalmException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-ENHANCE-YOUR-CALM'): void
    {
        parent::__construct($message, $errorCode, 420);
    }
}
