<?php

use function DI\create;

use Src\Repositories\Example\ExampleRepository;
use Src\Repositories\Example\ExampleRepositoryContract;
use Src\Services\Example\ExampleService;
use Src\Services\Example\ExampleServiceContract;

return [
    ExampleRepositoryContract::class => create(ExampleRepository::class),

    ExampleServiceContract::class => create(ExampleService::class),
];
