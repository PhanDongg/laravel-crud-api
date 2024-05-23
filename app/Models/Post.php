<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    // use HasFactory;
    //     public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    use HasFactory;

    // protected $table = 'posts';
    // protected $fillable = ['title', 'description', 'content', 'author', 'image', 'category', 'status'];

    //phần slug
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    //mapping commments table
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //mapping ratings table
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating', 'post_id', 'id');
    }
}
