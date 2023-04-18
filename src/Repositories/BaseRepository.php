<?php

namespace Src\Repositories;

abstract class BaseRepository implements BaseRepositoryContract
{
    /**
     * @var object $model
     */
    protected $model;

    /**
     * BaseRepository constructor
     * 
     * @param object $model
     * 
     * @return void
     */
    public function __construct(object $model)
    {
        $this->model = $model;
    }

    /**
     * No params
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param int $id
     */
    public function getById(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * @param string $field
     * @param string $attribute
     */
    public function getByAttribute(string $field, string $attribute)
    {
        return $this->model->where($field, $attribute);
    }

    /**
     * @param array $data
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param array $data
     * @param int $id
     */
    public function updateById(array $data, int $id)
    {
        return $this->model->find($id)->update($data);
    }

    /**
     * @param int $id
     */
    public function delete(int $id)
    {
        return $this->model->find($id)->delete();
    }
}
