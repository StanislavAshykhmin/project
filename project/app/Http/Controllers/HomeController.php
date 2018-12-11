<?php

namespace App\Http\Controllers;

use App\Friend;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $id = 1;
         $friends = User::where('id' , '!=' , $id);

         if ( Auth::user()->friends->count()) {
             $friends -> whereNotIn( 'id' , Auth::user() -> friends -> modelKeys());
         }
         $friends = $friends ->get();

        return view('home', ['friends'=>$friends]);
    }

    public function show($id){
        $id = 4;
        $friends = User::where('id' , '!=' , $id);

        if ( Auth::user()->friends->count()) {
            $friends -> whereNotIn( 'id' , Auth::user() -> friends -> modelKeys());
        }
        $friends = $friends ->get();
        return view('', ['friends'=>$friends]);
    }
}
