<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Repositories\Interfaces\BrandRepository;
use Illuminate\Support\Collection;

class BrandController extends Controller
{
    private BrandRepository $repository;

    public function __construct(BrandRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(): Collection
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

    public function update(StoreBrandRequest $request, $id)
    {
        return $this->repository->update($request->validated(), $id);
    }

    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}
