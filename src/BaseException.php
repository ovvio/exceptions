<?php

declare(strict_types=1);

namespace Ovvio\Exceptions;

use Exception;
use Throwable;

class BaseException extends Exception
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
