<?php

namespace Ovvio\Exceptions;

use Throwable;

class SpecificationDefaultException extends BaseLogicException
{
    public function __construct(
        int $code = Exceptions::EXCEPTION_CODE_DEFAULT,
        string $message = 'Invalid value',
        null|Throwable $previous = null,
    ) {
        Specification\ExceptionsSpecification::isValidExceptionCode(code: $code);

        parent::__construct(message: $message, code: $code, previous: $previous);
    }
}
