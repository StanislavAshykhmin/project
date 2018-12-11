<?php

namespace App\Http\Controllers;

use App\Friend;
use App\User;
use Carbon\Carbon;
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
        $users = User::where('id', '!=', Auth::id())->get();
        $date = Carbon::now()->toDateString();
        $id = 1;
         $friends = User::where('id' , '!=' , $id);

         if ( Auth::user()->friends->count()) {
             $friends -> whereNotIn( 'id' , Auth::user() -> friends -> modelKeys());
         }
         $friends = $friends ->get();

        return view('home_page', ['friends'=>$friends, 'users'=>$users, 'date'=>$date]);
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
