<?php

namespace App\Http\Controllers;

use App\Contact;
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
        $users = Contact::all();
        return view('home_page', ['users' => $users]);
    }

    public function show($id)
    {
        $id = 1;
        $userP = Contact::find($id);
        $user = Contact::all();
        $friends = $user->childs;
        $bfriends = $userP->bchilds;
        return view('register', ['friends' => $friends,/*'bfriends'=>$bfriends, */
            'user' => $user]);
    }
}
