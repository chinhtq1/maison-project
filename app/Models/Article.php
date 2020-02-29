<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'is_public','date_public','content','description','main_picture','thumbnail', 'fb_link','seo'
    ];

    public function auth() {
        return $this->belongsTo('App\User','user_id');
    }

}
