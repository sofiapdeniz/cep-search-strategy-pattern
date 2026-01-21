<?php

namespace php\Services;

use php\Contracts\CepProviderInterface;

class ViaCEP implements CepProviderInterface
{
    public function search(string $cep): array
    {
        $response = file_get_contents("https://viacep.com.br/ws/{$cep}/json/");

        $data = json_decode($response, true);

        return [
            'cep' => $data['cep'] ?? '',
            'rua' => $data['logradouro'] ?? '',
            'bairro' => $data['bairro'] ?? '',
            'cidade' => $data['localidade'] ?? '',
            'fonte' => 'ViaCEP'
        ];
    }
}
