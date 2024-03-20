<?php

namespace Osiom\Repository\Scopes;

abstract class Scope implements \Osiom\Repository\Contracts\Scope
{
    /**
     * {@inheritDoc}
     */
    public static function make(...$arguments): static
    {
        return new static(...$arguments);
    }
}
