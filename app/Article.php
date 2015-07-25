<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Fillable fields for an Article.
     * Sets which fields have permission to use the App\Article::create() method.
     * Don't put in things like $id or $password.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    /**
     * Additional fields to treat as Carbon instances.
     *
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * Scope queries to articles that have been published.
     *
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    /**
     * Scope queries to articles that have NOT been published.
     *
     * @param $query
     */
    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>=', Carbon::now());
    }

    /**
     * Set the published_at attribute.
     *
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }
}
