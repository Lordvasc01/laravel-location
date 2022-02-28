<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface BrandRepository
{
    public function firstOrCreate(array $attributes, array $values = []): Model;

    public function all($columns): Collection;
}
