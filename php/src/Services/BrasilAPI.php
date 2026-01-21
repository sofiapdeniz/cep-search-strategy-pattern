<?php

namespace php\Services;

use php\Contracts\CepProviderInterface;

class BrasilAPI implements CepProviderInterface
{
    public function search(string $cep): array
    {
        $response = file_get_contents("https://brasilapi.com.br/api/cep/v1/{$cep}");

        $data = json_decode($response, true);

        return [
            'cep' => $data['cep'] ?? '',
            'rua' => $data['street'] ?? '',
            'bairro' => $data['neighborhood'] ?? '',
            'cidade' => $data['city'] ?? '',
            'fonte' => 'BrasilAPI'
        ];
    }
}
