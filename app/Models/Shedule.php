<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function from(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Locality::class, 'departure_locality_id');
    }

    public function to(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Locality::class, 'arrival_locality_idd');
    }

    public function train(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Train::class, 'train_id');
    }
}
