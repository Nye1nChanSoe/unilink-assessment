<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'profile_image'];

    public function blogPosts()
    {
        return $this->hasMany(BlogPost::class);
    }
}
