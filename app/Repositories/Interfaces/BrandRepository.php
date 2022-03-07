<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface BrandRepository
{
    public function firstOrCreate(array $attributes, array $values = []): Model;

    public function list(): Collection;

    public function findById(int $id);

    public function update(array $payload, $id);

    public function delete($id);
}
