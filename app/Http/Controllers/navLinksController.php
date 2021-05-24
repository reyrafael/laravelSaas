<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navLinksController extends Controller
{
    public function aboutUs(){
        return page('aboutUs');
    }
}
