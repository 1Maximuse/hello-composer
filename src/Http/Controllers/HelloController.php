<?php

namespace maximuse\HelloWorld\Http\Controllers;

use Illuminate\Routing\Controller;

class HelloController extends Controller
{
    public function show_hello()
    {
        $name = config('helloworld.name1');

        return view('helloworld::helloworld', compact('name'));
    }
}