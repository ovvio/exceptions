<?php

declare(strict_types=1);

namespace Ovvio\Exceptions;

use LogicException;
use Ovvio\Exceptions\Specification\ExceptionsSpecification;
use Throwable;

class BaseLogicException extends LogicException implements Interface\ExceptionInterface
{
    public function __construct(
        null|string $message,
        int $code = Exceptions::EXCEPTION_CODE_DEFAULT,
        null|Throwable $previous = null,
    ) {
        ExceptionsSpecification::isValidExceptionCode(code: $code);

        $message = $message ?? self::getDefaultMessage();

        parent::__construct(message: $message, code: $code, previous: $previous);
    }

    /**
     * @see Interface\ExceptionInterface
     */
    public function getDefaultMessage(): string
    {
        return 'Logic exception';
    }
}
