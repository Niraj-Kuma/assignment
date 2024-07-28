<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class assignment extends Controller
{
    public function hero_section(){
        return view ('hero');
    }

    
}
