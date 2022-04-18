<?php

namespace App\Http\Controllers;
use  App\Models\User;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test()
    {
        // code...
        return ExampleController::all();
    }

    //
}
