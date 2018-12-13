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

    public function index(){

        $birthday = '01.12.1935';
        $tmp = explode('.', $birthday);
        $old = date('Y')-$tmp[2];
//        dd('Возраст: ' . $old);
        $users = Contact::all();
        $date = Carbon::now()->toDateString();
//        dd($date);

        return view('home_page', [ 'users'=>$users, 'date'=>$date]);
    }

    public function show($id){
        $id = 1;
//        $userP = Contact::find($id);
        $user = Contact::all();
        $friends = $user->childs;
//        $bfriends = $userP->bchilds;
        return view('register', ['friends'=>$friends,/*'bfriends'=>$bfriends, */'user'=>$user]);
    }
}
