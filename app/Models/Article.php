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
        'title', 'is_public','date_public','content','description','picture_data', 'fb_link'
    ];

    protected $casts = [
        'picture_data' => 'array'
    ];

    protected $attributes = [
        'picture_data' => '
        {
              "origin_url": "",
              "thumb_data": {
                "width": "20",
                "height": "20",
                "url": ""
              },
              "main_picture_data": {
                "width": "20",
                "height": "20",
                "url": ""
              }
        }'
    ];

    public function auth() {
        return $this->belongsTo('App\User','user_id');
    }

}
