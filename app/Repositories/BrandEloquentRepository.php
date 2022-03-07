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

    public function list(): Collection
    {
        return $this->query()->get();
    }

    public function findById($id)
    {
        return $this->query()->findOrFail($id);
    }

    public function update(array $attributes, $id)
    {
        return $this->query()->where('id', $id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->query()->where('id', $id)->delete();
    }
}
