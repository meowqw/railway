<?php

namespace App\Http\Controllers\Locality;

use App\Http\Controllers\Controller;
use App\Models\Locality;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Locality::all();
    }
}
