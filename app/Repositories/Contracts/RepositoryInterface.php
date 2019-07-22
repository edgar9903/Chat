<?php
namespace App\Repositories\Contracts;

interface RepositoryInterface
{

    /**
     * Get's all.
     *
     * @return mixed
     */
    public function all();

    /**
     * Set .
     *
     * @param array
     */
    public function create(array $data);
}