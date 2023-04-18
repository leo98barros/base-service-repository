<?php

namespace Src\Services;

interface BaseServiceContract
{
    /**
     * @return string
     */
    public function create();

    /**
     * @return string
     */
    public function read();
}