<?php

namespace App\Http\Controllers\Locality;

use App\Http\Controllers\Controller;
use App\Http\Requests\Locality\StoreRequest;
use App\Models\Locality;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        return Locality::create($data);
    }
}
