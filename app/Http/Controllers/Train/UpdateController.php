<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Http\Requests\Train\UpdateRequest;
use App\Models\Train;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Train $train)
    {
        $data = $request->validated();
        $train = $train->update($data);
        return $train;
    }
}
