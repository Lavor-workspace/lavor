<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routingController extends Controller
{
    public function complex($category, $route, $component = null){
        if (isset($component)) {
            $component = '.' . $component;
        }

        return view('routing.'.$category.'.'.$route.$component);
    }
}
