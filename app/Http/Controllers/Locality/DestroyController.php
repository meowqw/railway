<?php

namespace App\Http\Controllers\Locality;

use App\Http\Controllers\Controller;
use App\Models\Locality;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Locality $locality)
    {
        $locality->delete();
        return response([]);
    }
}
