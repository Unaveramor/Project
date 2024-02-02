<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts'; 

    // public function tags(){
    //     return $this->belongsToMany(Tag::class);
    // }
    // protected $table = 'posts'; //разное именование таблиц и модели
    protected $primaryKey = 'posts';
    // //protected $incrementing = false;//
    // //protected $keyType = 'string';
    // //protected $timestamps = false;
    // //protected $fillable = ['title', 'content'];
    public $timestamps = false;
    protected $fillable = ['title', 'content', 'rubric_id'];

    public function rubric(){
        return $this->belongsTo(Rubric::class);
    }
    public function getDate(){
        return Carbon::parse($this->created_al)->diffForHumans();
    }

}
