<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Information::all();
    }
}
