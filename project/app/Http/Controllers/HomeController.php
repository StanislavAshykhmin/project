<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\AddRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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
    public function store(AddRequest $request){

        $data = $request->all();
        if (!empty($data->photo)) {
            $image = $request->file('photo')->store('uploads', 'public');
        }else
        $image = '';


        DB::table('contacts')->insert([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'last_name'=>$data['last_name'],
            'phone'=>$data['phone'],
            'address'=>$data['address'],
            'birthday'=>$data['birthday'],
            'death'=>$data['death'],
            'sex'=>$data['sex'],
            'parent_id'=>$data['parent_id'],
            'photo'=>$image,
        ]);
        return redirect('/home')->with('message', 'Contact create');
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

    public function destroy($id){
        $user = Contact::find($id);
        Storage::delete('public/'.$user->photo);
        $user->delete();
        return redirect('/home')->with('message', 'Contact delete');
    }
}
