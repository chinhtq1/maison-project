<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = array(
        'name', 'type', 'content', 
    );
    
	protected $casts = [
        'content' => 'array'
    ];

    public $timestamps = false;
}
