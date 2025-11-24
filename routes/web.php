<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

// ! first way: pass name to the view directly from the route
// Route::get('/', function () {
//     return view('welcome', ['name' => 'Hasan']);
// });

// ! second way : pass name through the controller class to the view
// Route::get('/', [WelcomeController::class, 'welcome']);

// ======================== //
// ! Note: we can it more dynamic by pass name through the route it self
// * This is the most reliable solution
// Route::get('/{name?}', function ($name = 'Hasan') {
//     return view('welcome', ['name' => $name]);
// });

Route::get('/{name?}', [WelcomeController::class, 'welcome']);