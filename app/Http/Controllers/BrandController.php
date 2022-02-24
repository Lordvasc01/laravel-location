<?php

namespace App\Http\Controllers;

use App\Http\Services\BrandService;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brandService;

    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    public function store(Request $request) {
        return $this->brandService->save();
    }
}
