<?php

namespace App\Handlers;

class LfmConfigHandler extends \UniSharp\LaravelFilemanager\Handlers\ConfigHandler
{
    public function userField()
    {

        if (in_array(auth()->user()->role, config('auth.access.backend'))) {
            return 'folder';
        }else{
            return 'folder/' . auth()->user()->email;          
        }    }
}
