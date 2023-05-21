<?php

namespace App\Http\Controllers\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Resources\Schedule\ScheduleResource;
use App\Models\Shedule;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $schedules = Shedule::all();
        return ScheduleResource::collection($schedules);
    }
}
