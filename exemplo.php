<?php

require_once "vendor/autoload.php";

use \miguel\aula_composer\Search;

$busca = new Search;

$resultado = $busca->getAddressFromCEP('01001000');

print_r($resultado);