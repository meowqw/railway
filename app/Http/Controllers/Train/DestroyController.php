<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Train $train)
    {
        $train->delete();
        return response([]);
    }
}
