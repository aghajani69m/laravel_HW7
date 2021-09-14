<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'slug'
    ];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function image()
    {
        return $this->morphOne(image::class,'imageable');
    }
}
