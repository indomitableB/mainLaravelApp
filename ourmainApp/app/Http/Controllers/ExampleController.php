<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage()
    {
        // imagine we loaded data from the database
        $ourName = 'Bekbo';
        $animals = ['MeowsaLot', 'Doggy', 'Purly'];

        return view('homepage');
    }

    public function aboutPage()
    {
        return view('single-post');
    }
}
