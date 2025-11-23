<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // ! second way: using controller to pass the name value to the view
    public function welcome1()
    {
        return view('welcome', ['name' => 'Hasan']);
    }

    // * more reliable solution pass the name through route with default name = Hasan
    public function welcome2($name = 'Hasan') 
    {
        return view('welcome', ['name' => $name]);
    }
}