<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Information $information)
    {
        $information->delete();
        return response([]);
    }
}
