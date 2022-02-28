<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\BrandRepository;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $repository;

    public function __construct(BrandRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->all('*');
    }

    public function store(Request $request)
    {
        return $this->repository->firstOrCreate($request->all());
    }
}
