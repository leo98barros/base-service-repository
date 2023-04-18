<?php

use Src\Controllers\Controller;

$container = require __DIR__ . '/src/App/bootstrap.php';

echo "--- Controller::index <br>";
$container->call([Controller::class, 'index']);

echo "<br><br>";

echo "--- Controller::store <br>";
$container->call([Controller::class, 'store']);
