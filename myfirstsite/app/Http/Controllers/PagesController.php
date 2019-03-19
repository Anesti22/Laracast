<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome')->with([
            'foo' => 'bar',
            'tasks' => ['Some task'],
        ]);
    }

    public function contact()
    {
        return view('contact')->with([
            'tasks' => ['Contact task'],
        ]);
    }

    public function about()
    {
        return view('about')->with([
            'tasks' => ['About task'],
        ]);
    }
}
