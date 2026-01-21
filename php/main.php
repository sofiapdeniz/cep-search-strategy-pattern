<?php

require_once __DIR__ . '/vendor/autoload.php';

use php\Factories\CepProviderFactory;
use php\Services\CepSearcher;

echo "⟡ cep search test ⟡. php version\n";
echo "options: brasilapi, viacep\n";

$options = readline("choose the api: ");
$cep = readline("enter the cep: ");

try {
    $strategy = CepProviderFactory::make($options);

    $searcher = new CepSearcher();
    $searcher->setStrategy($strategy);

    $result = $searcher->executeSearch($cep);

    echo "\n[success by {$result['fonte']}]\n";
    echo "CEP: " . $result['cep'] . "\n";
    echo "street: " . $result['rua'] . "\n";
    echo "neighborhood: " . $result['bairro'] . "\n";
    echo "city: " . $result['cidade'] . "\n";

}

catch(Exception $e)
{
    echo "error: " . $e->getMessage() . "\n";
}
