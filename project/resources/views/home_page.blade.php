<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="R9nIuIOgs3vinojjbuCgDEAFVoFJjBpqbeZO0k3J">
    <title>Home_page</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/home_page_style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="js/js.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Muli|Roboto" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </head>
<body>
    <div class="wrap">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 Users knopka">
                        <img class="logo" src="img/logo.png" alt="Logo site">
                        <a href="#">Users</a>
                       <!-- <a href="#">Companies</a>-->
                     </div>
                    <div class="col-lg-2 offset-7 text-right dropdown-button">
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
                    <div class="col-lg-1 text-center Users knopka">
                        <a class="link1" href="#">Users</a>
                     </div>
                     </div>
                 </div>    
             </div>
         </div>

<div class="tree">
    <ul>
        <li>
            {{$userP->name}}
            <ul>
{{--                @if(!empty($friends))--}}
        @foreach($friends as $friend)
                    <ul>
            <li>
                {{ $friend->name }}
                @if(count($friend->childs))
                    @include('welcome',['childs' => $friend->childs, 'id'=>$userP->id, 'id'=>$friend->id])
                @endif
            </li>
                    </ul>
                    @foreach($bfriends as $bfriend)
                        <ul><li>
                                {{ $bfriend->name }}
                                @if(count($bfriend->bchilds))
                                    @include('auth.register',['bchilds' => $bfriend->bchilds, 'id'=>$userP->id, 'id'=>$bfriend->id])
                                @endif
                                @include('welcome',['childs' => $bfriend->childs, 'id'=>$userP->id, 'id'=>$friend->id])
                            </li>
                        </ul>
                    @endforeach
        @endforeach
                    {{--@endif--}}
                    {{--@foreach($bfriends as $bfriend)--}}
                        {{--<ul>--}}
                            {{--<li>--}}
                                {{--{{ $bfriend->name }}--}}
                                {{--@if(count($bfriend->bchilds))--}}
                                    {{--@include('auth.register',['bchilds' => $bfriend->bchilds, 'id'=>$userP->id, 'id'=>$bfriend->id])--}}
                                {{--@endif--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--@foreach($friends as $friend)--}}
                            {{--<ul><li>--}}
                                    {{--{{ $friend->name }}--}}
                                    {{--@if(count($friend->childs))--}}
                                        {{--@include('welcome',['childs' => $friend->childs, 'id'=>$userP->id, 'id'=>$friend->id])--}}
                                    {{--@endif--}}
                                    {{--@include('auth.register',['bchilds' => $friend->bchilds, 'id'=>$userP->id, 'id'=>$bfriend->id])--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--@endforeach--}}
                    {{--@endforeach--}}


            </ul>
        </li>
    </ul>
</div>
        <div class="content">
            <div class="container">
                <div class="row align-items-center text">
                        <div class="col-lg-1 text-left test">
                            <p>Photo</p>
                         </div>
                        <div class="col-lg-10 text-left test">
                            <p>Main info</p>
                         </div>
                 </div>
                @foreach($users as $user)
                <div class="row align-items-center text">
                        <div class="col-lg-1 text-left test1">
                            <img class="img" src="{{asset('storage/'.$user->photo)}}" alt="">
                         </div>
                        <div class="col-lg-10 test1">
                            <p class="name">{{$user->name}} (@if($user->sex == 'male')<i class="fas fa-mars"></i>@else<i class="fas fa-venus"></i>@endif  age {{$user->birthday}})</p>
                            <p>{{$user->email}} &nbsp {{$user->phone}} &nbsp {{$user->address}}</p>
                         </div>
                        <div class="col-lg-1 text-center test2">
                            <a class="link3" href="#"><i class="fas fa-user-edit fa-2x"></i></a>
                         </div>
                 </div>
            @endforeach
                <div class="button_open_popup">
                    <button class="button_add_users">
                    <span class="open"></span>
                    </button>
                 </div>
             </div>
         </div>

 </body>
 </html>
