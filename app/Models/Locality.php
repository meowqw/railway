<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function departureSchedules(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Shedule::class, 'departure_location_id');
    }

    public function arrivalSchedules(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Shedule::class, 'arrival_location_id');
    }
}
