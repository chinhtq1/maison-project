<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'is_public','date_public','data','description','seo', 'fb_link'
    ];

    protected $casts = [
        'data' => 'array'
    ];
    

    public function auth() {
        return $this->belongsTo('App\User','user_id');
    }
}
