<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Sluggable;
use Cviebrock\EloquentSluggable\Sluggable;
class Post extends Model
{
    use Sluggable;
    protected $fillable = [
        'post_title',
        'post_text',
       // 'slug',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'post_title'
            ]
        ];
    }

}
