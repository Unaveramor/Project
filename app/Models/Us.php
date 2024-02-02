<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Us extends Model
{
    use HasFactory;

    //protected $table = 'uss';
    public $timestamps = false;
    protected $fillable = ['name', 'email', 'nomber']; 

    public function rubric(){
        return $this->belongsTo(Rubric::class);
    }
    public function getDate(){
        return Carbon::parse($this->created_al)->diffForHumans();
    }
}
