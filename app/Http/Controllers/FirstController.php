<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    function index()
    {
        return view('contact', [ "name" => 'Tomás' ]);
    }

    function show(int $user_id)
    {
        echo $user_id;
    }
}
