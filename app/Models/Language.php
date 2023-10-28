<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Language extends Model {
    protected $fillable = [
        'name',
        'code',
    ];
    
    public function countries(): BelongsTo {
        return $this->belongsTo(Country::class);
    }
}
