<?php

declare(strict_types=1);

namespace Ovvio\Exceptions\Interface;

interface ExceptionInterface
{
    /**
     * Get default exception message
     *
     * @return string Default exception message
     */
    public function getDefaultMessage(): string;
}
