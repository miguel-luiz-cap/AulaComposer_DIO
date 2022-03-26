<?php

require_once "vendor/autoload.php";

use \scrash\aula_composer\Search;

$busca = new Search;

$resultado = $busca->getAddressFromCEP('07183500');

print_r($resultado);