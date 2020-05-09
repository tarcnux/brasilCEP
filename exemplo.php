<?php

require_once "vendor/autoload.php";

use Tarcnux\BrasilCep\Search;


$busca = new Search;

$resultado = $busca->getAdreesFromZipCode('70175900');

print_r($resultado);