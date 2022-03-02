<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Repositories\Interfaces\BrandRepository;
class BrandController extends Controller
{
    private BrandRepository $repository;

    public function __construct(BrandRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->list();
    }

    public function store(StoreBrandRequest $request)
    {
        return $this->repository->firstOrCreate($request->validated());
    }

    public function show($id)
    {
        return $this->repository->findById($id);
    }
}
