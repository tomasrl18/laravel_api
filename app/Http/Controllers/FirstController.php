<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    function index()
    {
        $users = ['user_1', 'user_2', 'user_3'];
        return view('contact', compact('users'));
    }

    function show(int $user_id)
    {
        echo $user_id;
    }
}
