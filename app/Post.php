<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Fillable
    protected $fillable = [
        'user_id', 'category_id', 'title', 'body', 'image',
    ];
    // Relationships
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
