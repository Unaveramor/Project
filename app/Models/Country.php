<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $primaryKey = 'country_id';
    // protected $keyType = 'string';
    // protected $timestamps = false;
    public function citys(){
        return $this->belongsToMany(City::class);
    }
}
