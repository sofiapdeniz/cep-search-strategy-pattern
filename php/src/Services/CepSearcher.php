<?php

namespace php\Services;

use php\Contracts\CepProviderInterface;

class CepSearcher
{
    private CepProviderInterface $strategy;

    public function setStrategy(CepProviderInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function executeSearch(string $cep): array
    {
        return $this->strategy->search($cep);
    }
}
