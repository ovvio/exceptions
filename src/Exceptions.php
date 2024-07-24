<?php

declare(strict_types=1);

namespace Ovvio\Exceptions;

/**
 * Exceptions
 */
final class Exceptions
{
    public const int EXCEPTION_CODE_DEFAULT = 0;

    /**
     * @var array<int, string>
     */
    public const array CODES = [
        self::EXCEPTION_CODE_DEFAULT => 'Ошибка',
        ...HttpResponseExceptions::CODES,
    ];
}
