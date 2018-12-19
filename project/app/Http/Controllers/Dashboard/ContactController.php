<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Contact;
use App\Http\Requests\AddRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

//        $users = Contact::where('id', '>', '0')->paginate(10);
        $users = Contact::all();
        return view('dashboard.contacts.index', ['users' => $users]);
    }

    public function store(AddRequest $request)
    {

        $data = $request->all();
        $image = $request->file('photo')->store('uploads', 'public');
        DB::table('contacts')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'birthday' => $data['birthday'],
//            'death' => $data['death'],
            'sex' => $data['sex'],
            'parent_id' => $data['parent_id'],
            'photo' => $image,
        ]);
        return redirect('/home')->with('message', 'Contact created');
    }

    public function show($id)
    {
        $user = Contact::find($id);
        $friends = $user->children;
        return view('dashboard.contacts.show', ['friends' => $friends,
            'user' => $user]);
    }

    public function edit($id)
    {
        $users = Contact::all();
        $userU = Contact::find($id);

        return view('update', ['userU' => $userU, 'users' => $users]);
    }

    public function update(UpdateRequest $request)
    {

        $data = $request->except('_token');
        $userU = Contact::find($request->input('id'));
        if ($request->file('photo')) {
            Storage::delete('public/' . $userU->image);
            $image = $request->file('photo')->store('uploads', 'public');
            $userU->photo = $image;
        }
        $userU->name = $data['name'];
        $userU->email = $data['email'];
        $userU->last_name = $data['last_name'];
        $userU->phone = $data['phone'];
        $userU->address = $data['address'];
        $userU->birthday = $data['birthday'];
//        $userU->death = $data['death'];
        $userU->sex = $data['sex'];
        $userU->parent_id = $data['parent_id'];


        $res = $userU->saveContacts()->save($userU);
        return redirect('/home')->with('message', 'Contact updated');
    }

    public function destroy($id)
    {
        $user = Contact::find($id);
        Storage::delete('public/' . $user->photo);
        $user->delete();
        return redirect('/home')->with('message', 'Contact deleted');
    }

    public function getAjaxUSER($id){
        $contact = Contact::whereId($id)->first();
        if($contact){
            return response(['contact' => $contact], 200);
        }
        return response(['message' => 'Error !!'], 422);
    }
}
