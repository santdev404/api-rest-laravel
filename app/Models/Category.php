<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
