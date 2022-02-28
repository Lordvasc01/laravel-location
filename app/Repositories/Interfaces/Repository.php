<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface Repository
{
    function find($id);

    function all($columns = ['*']): Collection;
}
