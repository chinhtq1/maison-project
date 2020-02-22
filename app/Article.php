<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'is_public','date_public','auth','content','description','picture_data','seo', 'fb_link', 'uuid'
    ];

    protected $casts = [
        'picture_data' => 'array'
    ];

}
