<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = User::find(1);
        foreach ($user->friends as $friend) {
            echo $friend->name;
        }

//        $users = User::all();
//        foreach ($users as $user){
//            echo $user->name;
//            echo $user->last_name;
//        }
        return view('home');
    }
}
