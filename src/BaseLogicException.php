<?php

declare(strict_types=1);

namespace Ovvio\Exceptions;

use LogicException;
use Ovvio\Exceptions\Specification\ExceptionsSpecification;
use Throwable;

class BaseLogicException extends LogicException
{
    public function __construct(
        string $message = 'Logic exception',
        int $code = Exceptions::EXCEPTION_CODE_DEFAULT,
        null|Throwable $previous = null,
    ) {
        ExceptionsSpecification::isValidExceptionCode(code: $code);

        parent::__construct(message: $message, code: $code, previous: $previous);
    }
}
