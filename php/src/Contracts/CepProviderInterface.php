<?php

namespace php\Contracts;

interface CepProviderInterface
{
    public function search(string $cep): array;
}
