<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model {
    protected $fillable = [
        'name',
        'weather_city_id',
    ];
    
    protected $with = [
        'country',
    ];
    
    public function country(): BelongsTo {
        return $this->belongsTo(Country::class);
    }
}
