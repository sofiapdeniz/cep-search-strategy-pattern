<?php

namespace php\Factories;

use php\Factories\Contracts\CepProviderFactoryInterface;
use php\Contracts\CepProviderInterface;
use php\Services\BrasilAPI;
use php\Services\ViaCEP;
use Exception;

class CepProviderFactory implements CepProviderFactoryInterface
{
    public static function make(string $type): CepProviderInterface
    {
        return match(strtolower($type)) {
            'brasilapi' => new BrasilAPI(),
            'viacep' => new ViaCEP(),
            default => throw new Exception("provider type '{$type}' unknown.")
        };
    }
}
