<?php

namespace php\Factories\Contracts;

use php\Contracts\CepProviderInterface;

interface CepProviderFactoryInterface
{
    public static function make(string $type): CepProviderInterface;
}
