<?php

namespace App\Http\Controllers\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Requests\Schedule\StoreRequest;
use App\Http\Resources\Schedule\ScheduleResource;
use App\Models\Shedule;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $schedule = Shedule::create($data);
        return new ScheduleResource($schedule);
    }
}
