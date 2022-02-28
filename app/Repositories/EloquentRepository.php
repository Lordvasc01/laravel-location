<?php

namespace App\Repositories;

use App\Repositories\Interfaces\Repository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class EloquentRepository implements Repository
{
    private $model;

    private $queryBuilder;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function query(): Builder
    {
        if ($this->queryBuilder) {
            return $this->queryBuilder;
        }

        return $this->model->query();
    }

    public function find($id)
    {
        return $this->query()->find($id);
    }

    public function all($columns = ['*']): Collection
    {
        return $this->model->all($columns);
    }

}
