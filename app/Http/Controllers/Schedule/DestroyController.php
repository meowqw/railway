<?php

namespace App\Http\Controllers\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Shedule;
use App\Models\Train;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Shedule $schedule)
    {
//        dd($shedule);
        $schedule->delete();
        return response([]);
    }
}
