<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Http\Requests\Train\StoreRequest;
use App\Models\Train;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $train = Train::create($data);
        return $train;
    }
}
