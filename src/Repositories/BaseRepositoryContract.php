<?php

namespace Src\Repositories;

interface BaseRepositoryContract
{
    /**
     * No params
     */
    public function all();

    /**
     * @param int $id
     */
    public function getById(int $id);

    /**
     * @param string $field
     * @param string $attribute
     */
    public function getByAttribute(string $field, string $attribute);

    /**
     * @param array $data
     */
    public function create(array $data);

    /**
     * @param array $data
     * @param int $id
     */
    public function updateById(array $data, int $id);

    /**
     * @param int $id
     */
    public function delete(int $id);
}
