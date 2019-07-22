<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;

abstract class Repository implements RepositoryInterface
{

    /**
     * @var model
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    /**
     * Get's all.
     *
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Set message.
     *
     * @param array
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }
}