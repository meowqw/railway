<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $trains = Train::all();
        return $trains;
    }
}
