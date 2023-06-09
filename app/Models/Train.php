<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function shedules()
    {
        return $this->hasMany(Shedule::class);
    }
}
