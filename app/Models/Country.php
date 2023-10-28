<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model {
    protected $fillable = [
        'name',
        'language_code',
    ];
    
    public function cities(): HasMany {
        return $this->hasMany(City::class);
    }
    
    public function language(): BelongsTo {
        return $this->belongsTo(Language::class);
    }
}
