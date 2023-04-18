<?php

namespace Src\Controllers;

use Src\Services\Example\ExampleServiceContract;

class Controller
{
    /**
     * @var
     */
    private ExampleServiceContract $exampleService;

    /**
     * @return void
     */
    public function __construct(ExampleServiceContract $exampleService)
    {
        $this->exampleService = $exampleService;
    }

    /**
     * @return string
     */
    public function index()
    {
        echo "{$this->exampleService->read()}";
    }

    /**
     * @return string
     */
    public function store()
    {
        echo "{$this->exampleService->create()}";
    }
}
