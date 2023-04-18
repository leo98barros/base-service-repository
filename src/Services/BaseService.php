<?php

namespace Src\Services;

abstract class BaseService implements BaseServiceContract
{
    /**
     * @return string
     */
    public function create()
    {
        return 'create';
    }

    /**
     * @return string
     */
    public function read()
    {
        return 'read';
    }
}