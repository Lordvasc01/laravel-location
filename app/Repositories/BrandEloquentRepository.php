<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BrandRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BrandEloquentRepository extends EloquentRepository implements BrandRepository
{
    public function firstOrCreate(array $attributes, array $values = []): Model
    {
        return $this->query()->firstOrCreate($attributes, $values);
    }

    public function all($columns = ['*']): Collection
    {
        return $this->query()->get($columns);
    }
}
