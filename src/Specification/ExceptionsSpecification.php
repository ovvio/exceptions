<?php

declare(strict_types=1);

namespace Ovvio\Exceptions\Specification;

use Ovvio\Exceptions\BaseLogicException;
use Ovvio\Exceptions\Exceptions;
use Ovvio\Exceptions\SpecificationDefaultException;

use function key_exists;

/**
 * Exceptions specification
 */
final class ExceptionsSpecification extends BaseLogicException
{
    /**
     * User name
     *
     * @param string $username User name
     */
    public static function isValidExceptionCode(int $code): void
    {
        if (false === key_exists($code, Exceptions::CODES)) {
            throw new SpecificationDefaultException();
        }
    }
}
