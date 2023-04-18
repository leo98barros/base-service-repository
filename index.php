<?php

require __DIR__.'/vendor/autoload.php';

use Src\Repositories\Example\ExampleRepository;

$model = (object) ['name' => 'name example'];

$example = new ExampleRepository($model);

echo '<pre>';
    var_export($example);
echo '</pre>';
