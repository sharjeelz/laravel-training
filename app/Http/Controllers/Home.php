<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Home extends Controller
{
    public function setSession()
    {
        Redis::set('name', 'Taylor');
    }

    public function getSession()
    {
        return Redis::get('name');
    }
    
}
