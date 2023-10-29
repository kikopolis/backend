<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Country extends Model {
    protected $fillable = [
        'name',
        'language_code',
    ];
    protected $with = [
        'language',
    ];
    
    public function cities(): HasMany {
        return $this->hasMany(City::class);
    }
    
    public function language(): HasOne {
        return $this->hasOne(Language::class);
    }
}
