<?php

declare(strict_types=1);

namespace Ovvio\Exceptions;

use LogicException;
use Throwable;

class BaseLogicException extends LogicException
{
    public function __construct(
        null|string $message = '',
        null|int $code = Exceptions::EXCEPTION_CODE_DEFAULT,
        Throwable $previous = null,
    ) {
        parent::__construct(
            message: $message ?? '',
            code: $code ?? Exceptions::EXCEPTION_CODE_DEFAULT,
            previous: $previous,
        );
    }
}
