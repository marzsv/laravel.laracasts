<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function __toString()
    {
        return $this->name;
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->latest();
    }
}
