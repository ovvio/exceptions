<?php

declare(strict_types=1);

namespace Ovvio\Exceptions;

use Exception;
use Ovvio\Exceptions\Specification\ExceptionsSpecification;
use Throwable;

class BaseException extends Exception
{
    public function __construct(
        string $message = 'Exception',
        int $code = Exceptions::EXCEPTION_CODE_DEFAULT,
        null|Throwable $previous = null,
    ) {
        ExceptionsSpecification::isValidExceptionCode(code: $code);

        parent::__construct(message: $message, code: $code, previous: $previous);
    }
}
