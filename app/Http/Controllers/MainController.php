<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('home');
    }

    public function confirmed_indication(Request $request)
    {
        $key_array_post = preg_grep('/^(template)[0-9]+$/i', array_keys($request->post()));
        $templates_array = array_intersect_key($request->post(), array_flip($key_array_post));
        $templates = implode(',', $templates_array);
        
        dd($request->post());
    }

}
