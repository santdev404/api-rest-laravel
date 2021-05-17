<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $table = 'posts';

    public function user(){
        $this->belongsTo('App\User', 'user_id');
    }

    public function category(){
        $this->belongsTo('App\Category', 'category_id');
    }



}
