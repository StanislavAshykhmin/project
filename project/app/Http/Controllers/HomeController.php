<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\AddRequest;
use App\Http\Requests\UpdateRequest;
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
        $users = Contact::where('id', '>', '0')->paginate(10);
        return view('home_page', ['users' => $users]);
    }
    public function store(AddRequest $request){

        $data = $request->all();
//        if (!empty($data->photo)) {
            $image = $request->file('photo')->store('uploads', 'public');
//        }else
//        $image = '';


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
        $user = Contact::find($id);
        $friends = $user->childs;
//        $bfriends = $userP->bchilds;
        return view('auth.register', ['friends' => $friends,/*'bfriends'=>$bfriends, */
            'user' => $user]);
    }

    public function edit($id){
        $users = Contact::all();
        $userU = Contact::find($id);

        return view('update', ['userU'=>$userU, 'users'=>$users]);
    }

    public function update(UpdateRequest $request){

        $data = $request->except('_token');
        $userU = Contact::find($request->input('id'));
        if($request->file('photo')){
            Storage::delete('public/'.$userU->image);
            $image = $request->file('photo')->store('uploads', 'public');
            $userU->photo = $image;
        }
//        dd($data['id']);
        $userU->id = $data['id'];
        $userU->name = $data['name'];
        $userU->email = $data['email'];
        $userU->last_name = $data['last_name'];
        $userU->phone = $data['phone'];
        $userU->address = $data['address'];
        $userU->birthday = $data['birthday'];
        $userU->death = $data['death'];
        $userU->sex = $data['sex'];
        $userU->parent_id= $data['parent_id'];


        $res = $userU->saveContacts()->save($userU);
        return redirect('/home')->with('message', 'Contact update');
    }

    public function destroy($id){
        $user = Contact::find($id);
        Storage::delete('public/'.$user->photo);
        $user->delete();
        return redirect('/home')->with('message', 'Contact delete');
    }
}
