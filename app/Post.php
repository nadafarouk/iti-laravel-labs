<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sluggable;
class Post extends Model
{
    protected $fillable = [
        'post_title',
        'post_text',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
