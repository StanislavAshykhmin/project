<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="R9nIuIOgs3vinojjbuCgDEAFVoFJjBpqbeZO0k3J">
    <title>Home_page</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/home_page_style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Muli|Roboto" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 </head>
<body>
    <div class="wrap">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class=" col-6 col-lg-3 Users knopka">
                        <img class="logo" src="img/logo.png" alt="Logo site">
                        <a href="">Users</a>
                     </div>
                    <div class="col-6 col-lg-9 text-right dropdown-button">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-link dropdown-toggle menu-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                             </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                             </div>
                         </div>
                     </div>
                 </div>
                <div class="row link">
                    <div class="col-lg-1 text-left Users knopka">
                        <a class="link1" href="">Users</a>
                     </div>

                     </div>
                 </div>    
             </div>
         </div>


    @if (session('message'))
        <div class="alert alert-light" style="text-align: center;">
            {{ session('message') }}
        </div>
    @endif
    <div class="content">
        <div class="container">
            <div class="row align-items-center text">
                <div class="col-4 col-lg-1 text-left test">
                    <p>Photo</p>
                </div>
                <div class="col-8 col-lg-10 text-left test">
                    <p>Main info</p>
                </div>
            </div>
            @foreach($users as $user)
                <div class="row align-items-center text">
                    <div class="col-2 col-lg-1 text-left test1">
                        <img class="img" src="{{asset('storage/'.$user->photo)}}" alt="">
                    </div>
                    <div class=" col-8 col-lg-9 test1">
                        <p class="name"><a href="{{route('user', ['id' => $user->id])}}">{{$user->name}}</a> (@if($user->sex == 'male')<i class="fas fa-mars"></i>@else<i class="fas fa-venus"></i>@endif  age {{$user->age()}})</p>
                        <p>{{$user->email}} &nbsp {{$user->phone}} &nbsp {{$user->address}}</p>
                    </div>
                    <div class="col-2 col-lg-1 text-center test2 {{--enter-update--}} " data-id="{{$user->id}}">
                        <a class="edit-button link3 edit-contact" data-url="{{route('ajax-contact', ['id' => $user->id])}}" href="{{route('update', ['id'=>$user->id])}}"><i class="fas fa-user-edit fa-2x"></i></a>
                    </div>
                    {{--<div class="button_open_popup enter-update" data-id="{{$user->id}}">--}}
                        {{--<button class="edit-button">--}}
                            {{--<i class="fas fa-user-edit fa-2x"></i>--}}
                            {{--<span class="open"></span>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                    <button class="dagger btn-light" data-toggle="modal" data-target="#delete-{{$user->id}}">&times;</button>
                    <div class="modal fade" id="delete-{{$user->id}}" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Удалить</h4>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('delete', ['id' => $user->id]) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger" style="opacity: .5;">Удалить</button>
                                        <button type="button" class="btn btn-light m-t-10" data-dismiss="modal">Закрыть</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
            <ul class="pagination" style="border: #1f648b;">
                {{ $users->links() }}
            </ul>
            <div class="button_open_popup">
                <button class="button_add_users enter">
                    <span class="open"></span>
                </button>
            </div>
        </div>
    </div>
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
                    <label for="photo"></label>
                    <input class="add-photo" type="file" name="photo"  value="{{ old('photo') }}">
                    @if ($errors->has('photo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('photo') }}</strong>
                        </span>
                    @endif
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
                    <input class="checkbox" type="radio" name="sex" value="male">
                    <label >Male</label>
                    <input class="checkbox" type="radio" name="sex" value="female">
                    <label>Female</label>
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



   {{-- <div class="container user-data-popup">
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
                    <input class="qw" type="text" name="name" value="--}}{{--{{ $user->id }}--}}{{--">
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
                    <label for="photo"></label>
                    <input type="file" name="photo"  value="{{ old('photo') }}">
                    @if ($errors->has('photo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('photo') }}</strong>
                        </span>
                    @endif
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
                --}}{{--<div class="col-12 col-lg-2 text-left">--}}{{--
                --}}{{--<p>Birthplace</p>--}}{{--
                --}}{{--</div>--}}{{--
                --}}{{--<div class="col-12 col-lg-10">--}}{{--
                --}}{{--<input type="text" name="personnal phone">--}}{{--
                --}}{{--</div>--}}{{--
                <div class="col-12 col-lg-2 text-left">
                    <p>Date of Death</p>
                </div>
                <div class="col-12 col-lg-10">
                    <input type="date" name="death" --}}{{--max="2018-12-31"--}}{{--  value="{{ old('death') }}">
                </div>
                <div class="col-3 col-lg-1 text-left">
                    <p>Sex</p>
                </div>
                <div class="col-9 col-lg-11 check">
                    <input class="checkbox" type="radio" name="sex" value="male">
                    <label >Male</label>
                    <input class="checkbox" type="radio" name="sex" value="female">
                    <label>Female</label>
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
                    --}}{{--<input class="contacts_input" type="text" name="add contacts">--}}{{--
                    <select name="parent_id" size="1">
                        <option selected></option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            --}}{{--<hr>--}}{{--
            --}}{{--<div class="row">--}}{{--
            --}}{{--<div class="col-12 col-lg-3">--}}{{--
            --}}{{--<p>How to get acquainted</p>--}}{{--
            --}}{{--</div>--}}{{--
            --}}{{--<div class="col-12 col-lg-9">--}}{{--
            --}}{{--<select name="users" size="1" >--}}{{--
            --}}{{--<option value="1" selected>Family</option>--}}{{--
            --}}{{--<option value="s2" >Job</option>--}}{{--
            --}}{{--<option value="s3">Study</option>--}}{{--
            --}}{{--<option value="s4">Friends</option>--}}{{--
            --}}{{--</select>--}}{{--
            --}}{{--</div>--}}{{--
            --}}{{--</div>--}}{{--
            <div class="row confirm_or_chancel text-center">
                <div class=" col-5 col-lg-2">
                    <button class="confirm" type="submit" name="add users">Update Contact</button>
                </div>
                <div class="col-7 col-lg-2">
                    <button class="chancel exit" type="button" name="Chancel">Cancel</button>
                </div>
            </div>
        </form>
    </div>--}}
    {{--123--}}
     <div id="toTop">&#8657;</div>

<script type="text/javascript">
    $('.enter').click(function(){
      $(".popup").fadeIn();
});
    // $('.enter-update').click(function(){
    //     $(".user-data-popup").fadeIn();
    // });
    $('.exit').click(function(){
      $('.popup').fadeOut();
});
    /*$('.exit').click(function(){
        $('.user-data-popup').fadeOut();
    });*/
    $(function() {
        $(window).scroll(function() {
             if($(this).scrollTop() != 0) {
                 $('#toTop').fadeIn();
                 } else {
         $('#toTop').fadeOut();
     }
});
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop:0},800);
    });
});

    $(function () {
        $('.edit-button').click(function (e) {
            var parent = $(this).parent('.enter-update');
            $('.qw').val(+parent.data('id'));
        });
    });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    alert('tettet')
    $(function () {
$('.edit-contact').on('click', function (e) {
    e.preventDefault()
    alert('tettet')
    var url = $(this).attr("data-url")
    $.ajax({
        url: url,
        success: function (result) {
            console.log(result)
            let popup = $('.edit-popup')
            popup.find('input[name="birthday"]').value(result.contact.birthday)
            popup.find('input[name="birthday"]').value(result.contact.birthday)
            popup.find('input[name="birthday"]').value(result.contact.birthday)
            popup.find('input[name="birthday"]').value(result.contact.birthday)
            popup.find('input[name="birthday"]').value(result.contact.birthday)

        },err: function (err) {
            console.log(err)
        }
    });




})
    });
</script>
 </body>
 </html>
