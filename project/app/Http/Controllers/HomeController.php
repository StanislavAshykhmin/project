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

        $id = 1;
        $userP = Contact::find($id);
        $friends = $userP->childs;
        $bfriends = $userP->bchilds;
        $users = Contact::all();
        $date = Carbon::now()->toDateString();

        return view('home_page', [ 'users'=>$users, 'date'=>$date, 'friends'=>$friends,'bfriends'=>$bfriends, 'userP'=>$userP]);
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
