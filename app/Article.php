<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Sets which fields have permission to use the App\Article::create() method
        //Don't put in things like $id or $password
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];
}
