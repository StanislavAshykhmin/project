<div class="container popup">
    <div class="row">
        <div class="col-6 col-lg-3 text-left add_user">
            <h2>Add Contact</h2>
        </div>
        <div class="col-6 col-lg-9 text-right">
            <span class="close exit"></span>
        </div>
    </div>
    <div class="row personal_contacts">
        <div class="col-3 col-lg-1 text-right">
            <i class="fas fa-clipboard-list"></i>
        </div>
        <div class="col-9 col-lg-4 text-left">
            <p>PERSONAL CONTACTS</p>
        </div>
    </div>
    <form method="post" action="{{route('add')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-12 col-lg-2 text-left">
                <p>First Name</p>
            </div>
            <div class="col-12 col-lg-4">
                <input type="text" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                @endif
            </div>
            <div class="col-12 col-lg-3 text-left">
                <p>Personnal email</p>
            </div>
            <div class="col-12 col-lg-3">
                <input type="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
            </div>
            <div class="col-12 col-lg-2 text-left">
                <p>Last Name</p>
            </div>
            <div class="col-12 col-lg-4">
                <input type="text" name="last_name"  value="{{ old('last_name') }}">
                @if ($errors->has('last_name'))
                    <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                @endif
            </div>
            <div class="col-12 col-lg-3 text-left">
                <p>Personnal phone</p>
            </div>
            <div class="col-12 col-lg-3">
                <input type="text" name="phone" value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                    <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                @endif
            </div>
            <div class="col-4 col-lg-2 text-left">
                <p>Photo</p>
            </div>
            <div class="col-6 col-lg-4 upload">
                <div class="upload-file-container">
                    <img id="image" src="#" alt=""/>
                    <div class="upload-file-container-text">
                        <span>Add photo</span>
                        <input type="file" name="photo" class="photo" id="imgInput" value="{{ old('photo') }}">
                        @if ($errors->has('photo'))
                            <span class="help-block">
                            <strong>{{ $errors->first('photo') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
             </div>
            <div class="col-12 col-lg-3 text-left">
                <p>Personnal address</p>
            </div>
            <div class="col-12 col-lg-3">
                <input type="text" name="address" value="{{ old('address') }}">
                @if ($errors->has('address'))
                    <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                @endif
            </div>
            <div class="col-12 col-lg-2 text-left">
                <p>Date of Birth</p>
            </div>
            <div class="col-12 col-lg-10">
                <input type="date" name="birthday" min="1900-01-01" value="{{ old('birthday') }}">
                @if ($errors->has('birthday'))
                    <span class="help-block">
                            <strong>{{ $errors->first('birthday') }}</strong>
                        </span>
                @endif
            </div>
            {{--<div class="col-12 col-lg-2 text-left">--}}
            {{--<p>Birthplace</p>--}}
            {{--</div>--}}
            {{--<div class="col-12 col-lg-10">--}}
            {{--<input type="text" name="personnal phone">--}}
            {{--</div>--}}
            <div class="col-12 col-lg-2 text-left">
                <p>Date of Death</p>
            </div>
            <div class="col-12 col-lg-10">
                <input type="date" name="death" {{--max="2018-12-31"--}}  value="{{ old('death') }}">
            </div>
            <div class="col-3 col-lg-1 text-left">
                <p>Sex</p>
            </div>
            <div class="col-9 col-lg-11 check">
                <input id="check1" class="checkbox" type="radio" name="sex" value="male">
                <label for="check1" >Male</label>
                <input id="check2" class="checkbox" type="radio" name="sex" value="female">
                <label for="check2">Female</label>
                @if ($errors->has('sex'))
                    <span class="help-block">
                            <strong>{{ $errors->first('sex') }}</strong>
                        </span>
                @endif
            </div>
        </div>
        <hr/>
        <div class="row personal_contacts">
            <div class="col-3 col-lg-1 text-right phone_book">
                <img src="img/phone-book.png" alt="книга">
            </div>
            <div class="col-9 col-lg-11 text-left contacts">
                <p>CONTACTS</p>
            </div>
        </div>
        <div class="row add_contacts">
            <div class="col-12 col-lg-2">
                <p>Add Contacts</p>
            </div>
            <div class="col-12 col-lg-10">
                {{--<input class="contacts_input" type="text" name="add contacts">--}}
                <select name="parent_id" size="1">
                    <option selected></option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{--<hr>--}}
        {{--<div class="row">--}}
        {{--<div class="col-12 col-lg-3">--}}
        {{--<p>How to get acquainted</p>--}}
        {{--</div>--}}
        {{--<div class="col-12 col-lg-9">--}}
        {{--<select name="users" size="1" >--}}
        {{--<option value="1" selected>Family</option>--}}
        {{--<option value="s2" >Job</option>--}}
        {{--<option value="s3">Study</option>--}}
        {{--<option value="s4">Friends</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="row confirm_or_chancel text-center">
            <div class=" col-5 col-lg-2">
                <button class="confirm" type="submit" name="add users">Add Contact</button>
            </div>
            <div class="col-7 col-lg-2">
                <button class="chancel exit" type="button" name="Chancel">Cancel</button>
            </div>
        </div>
    </form>
</div>



{{--update contact--}}



 <div class="container user-data-popup edit-popup">
     <div class="row">
         <div class="col-6 col-lg-3 text-left add_user">
             <h2>Update Contact</h2>
         </div>
         <div class="col-6 col-lg-9 text-right">
             <span class="close exit"></span>
         </div>
     </div>
     <div class="row personal_contacts">
         <div class="col-3 col-lg-1 text-right">
             <i class="fas fa-clipboard-list"></i>
         </div>
         <div class="col-9 col-lg-4 text-left">
             <p>PERSONAL CONTACTS</p>
         </div>
     </div>
     <form method="post" action="{{route('update_push')}}" enctype="multipart/form-data">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input class="id" type="hidden" name="id" value="">
         <div class="row">
             <div class="col-12 col-lg-2 text-left">
                 <p>First Name</p>
             </div>
             <div class="col-12 col-lg-4">
                 <input class="qw" type="text" name="name" value="{{ old('name') }}">
                 @if ($errors->has('name'))
                     <span class="help-block">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                 @endif
             </div>
             <div class="col-12 col-lg-3 text-left">
                 <p>Personnal email</p>
             </div>
             <div class="col-12 col-lg-3">
                 <input type="email" name="email" value="{{ old('email') }}">
                 @if ($errors->has('email'))
                     <span class="help-block">
                         <strong>{{ $errors->first('email') }}</strong>
                     </span>
                 @endif
             </div>
             <div class="col-12 col-lg-2 text-left">
                 <p>Last Name</p>
             </div>
             <div class="col-12 col-lg-4">
                 <input type="text" name="last_name"  value="{{ old('last_name') }}">
                 @if ($errors->has('last_name'))
                     <span class="help-block">
                         <strong>{{ $errors->first('last_name') }}</strong>
                     </span>
                 @endif
             </div>
             <div class="col-12 col-lg-3 text-left">
                 <p>Personnal phone</p>
             </div>
             <div class="col-12 col-lg-3">
                 <input type="text" name="phone" value="{{ old('phone') }}">
                 @if ($errors->has('phone'))
                     <span class="help-block">
                         <strong>{{ $errors->first('phone') }}</strong>
                     </span>
                 @endif
             </div>
             <div class="col-4 col-lg-2 text-left">
                 <p>Photo</p>
             </div>
             <div class="col-6 col-lg-4 upload">
                 <div class="upload-file-container">
                     <img id="image" src="#" alt=""/>
                        <div class="upload-file-container-text">
                           <span>Add photo</span>
                           <input type="file" name="photo" class="photo" id="imgInput" value="{{ old('photo') }}">
                            @if ($errors->has('photo'))
                                <span class="help-block">
                                <strong>{{ $errors->first('photo') }}</strong>
                                </span>
                            @endif
                         </div>
                  </div>
              </div>
             <div class="col-12 col-lg-3 text-left">
                 <p>Personnal address</p>
             </div>
             <div class="col-12 col-lg-3">
                 <input type="text" name="address" value="{{ old('address') }}">
                 @if ($errors->has('address'))
                     <span class="help-block">
                         <strong>{{ $errors->first('address') }}</strong>
                     </span>
                 @endif
             </div>
             <div class="col-12 col-lg-2 text-left">
                 <p>Date of Birth</p>
             </div>
             <div class="col-12 col-lg-10">
                 <input type="date" name="birthday" min="1900-01-01" value="{{ old('birthday') }}">
                 @if ($errors->has('birthday'))
                     <span class="help-block">
                         <strong>{{ $errors->first('birthday') }}</strong>
                     </span>
                 @endif
             </div>
             {{--<div class="col-12 col-lg-2 text-left">--}}
             {{--<p>Birthplace</p>--}}
             {{--</div>--}}
             {{--<div class="col-12 col-lg-10">--}}
             {{--<input type="text" name="personnal phone">--}}
             {{--</div>--}}
             <div class="col-12 col-lg-2 text-left">
                 <p>Date of Death</p>
             </div>
             <div class="col-12 col-lg-10">
                 <input type="date" name="death" max="2018-12-31"  value="{{ old('death') }}">
             </div>
             <div class="col-3 col-lg-1 text-left">
                 <p>Sex</p>
             </div>
             <div class="col-9 col-lg-11 check">
                 <input id="check1" class="checkbox" type="radio" name="sex" value="male">
                 <label for="check1" >Male</label>
                 <input id="check2" class="checkbox" type="radio" name="sex" value="female">
                 <label for="check2">Female</label>
                 @if ($errors->has('sex'))
                     <span class="help-block">
                         <strong>{{ $errors->first('sex') }}</strong>
                     </span>
                 @endif
             </div>
         </div>
         <hr/>
         <div class="row personal_contacts">
             <div class="col-3 col-lg-1 text-right phone_book">
                 <img src="img/phone-book.png" alt="книга">
             </div>
             <div class="col-9 col-lg-11 text-left contacts">
                 <p>CONTACTS</p>
             </div>
         </div>
         <div class="row add_contacts">
             <div class="col-12 col-lg-2">
                 <p>Add Contacts</p>
             </div>
             <div class="col-12 col-lg-10">
                 {{--<input class="contacts_input" type="text" name="add contacts">--}}
                 <select name="parent_id" size="1">
                     <option selected></option>
                     @foreach($users as $user)
                         <option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>
                     @endforeach
                 </select>
             </div>
         </div>
         <hr>
         {{--<div class="row">--}}
         {{--<div class="col-12 col-lg-3">--}}
         {{--<p>How to get acquainted</p>--}}
         {{--</div>--}}
         {{--<div class="col-12 col-lg-9">--}}
         {{--<select name="users" size="1" >--}}
         {{--<option value="1" selected>Family</option>--}}
         {{--<option value="s2" >Job</option>--}}
         {{--<option value="s3">Study</option>--}}
         {{--<option value="s4">Friends</option>--}}
         {{--</select>--}}
         {{--</div>--}}
         {{--</div>--}}
         <div class="row confirm_or_chancel text-center">
             <div class=" col-5 col-lg-2">
                 <button class="confirm" type="submit" name="add users">Update Contact</button>
             </div>
             <div class="col-7 col-lg-2">
                 <button class="chancel exit" type="button" name="Chancel">Cancel</button>
             </div>
         </div>
     </form>
 </div>