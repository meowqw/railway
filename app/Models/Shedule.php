<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function departureLocation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Locality::class, 'departure_location_id');
    }

    public function arrivalLocation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Locality::class, 'arrival_location_id');
    }

    public function train(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Train::class, 'train_id');
    }
}
