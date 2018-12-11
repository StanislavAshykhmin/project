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
                                 John Doe
                             </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                             </div>
                         </div>
                     </div>
                 </div>
                <div class="row link">
                    <div class="col-lg-1 text-center Users knopka">
                        <a class="link1" href="#">Users</a>
                     </div>
                        <!-- Не добавлять в проект-->
                        <!-- <div class="col-lg-1 text-center Users">
                            <a class="link1" href="#">Statistic</a>
                              </div>-->
                        <!-- <div class="col-lg-4 offset-6 text-right">
                               <button class="btn search indent" type="submit"><i class="fas fa-search"></i></button>
                               <button class="btn filter indent" type="submit"><i class="fas fa-sliders-h"></i>Add Filter</button>
                               <button class="btn copy indent" type="submit"><i class="fas fa-copy"></i></button>
                               <button class="btn indent download" type="submit"><i class="fas fa-file-download"></i></button>
                              </div>-->
                     </div>
                 </div>    
             </div>
         </div>
        <div class="content">
            <div class="container">
                <!-- Не добавлять в проект-->
                <!--<div class="row buttons">
                      <div class="col-lg-8 knopka">
                        <button class="btn Male" type="button">Male&nbsp;&nbsp;&nbsp;&nbsp;&#215;</button>
                        <button class="btn Manager" type="button">Manager&nbsp;&nbsp;&#215;</button>
                        <button class="btn Libra" type="button">Libra&nbsp;&nbsp;&nbsp;&#215;</button>
                        <button class="btn streess" type="button">#streess-resistant&nbsp;&nbsp;&nbsp;&nbsp;&#215;</button>
                        <button class="btn selfmodivated" type="button">#selfmotivated&nbsp;&nbsp;&nbsp;&nbsp;&#215;</button>
                     </div> 
                      <div class="col-lg-3 offset-1 text-right save_search">
                        <a class="" href="#">Save Search</a>
                        <a class="clear" href="#">Clear All</a>
                     </div>
                     </div>
                <div class="row blog">
                    <div class="col-lg-3 knopka">
                        <p><i class="fas fa-user-friends"></i> &nbsp 283 434 Users Fouded</p>
                    </div>
                    <div <div class="col-lg-1 text-right offset-8">  
                        <a class="link3" href="#"><i class="fas fa-list fa-1x"></i></a>
                         <a class="link3" href="#"><i class="fas fa-th-large fa-1x"></i></a>
                    </div>
                 </div>-->
                <div class="row align-items-center text">
                        <!--<div class="col-lg-1 text-center">
                            <span><i class="far fa-square"></i></span>
                                <input type="checkbox" id="scales" name="scales">
                                <label for="scales"></label>
                             </div>-->
                        <div class="col-lg-1 text-left test">
                            <p>Photo</p>
                         </div>
                        <div class="col-lg-10 text-left test">
                            <p>Main info</p>
                         </div>
                        <!--<div class="col-lg-2 text-left test">
                                <p>Company</p>
                              </div>-->
                        <!--<div class="col-lg-3 text-left test">
                               <p>Previous Company</p>
                             </div>-->
                 </div>
                @foreach($users as $user)
                <div class="row align-items-center text">
                        <!--<div class="col-lg-1 text-center">
                            <input type="checkbox" id="scales" name="scales" border="2">
                             </div>-->
                        <div class="col-lg-1 text-left test1">
                            <img class="img" src="{{asset('storage/'.$user->photo)}}" alt="">
                         </div>
                        <div class="col-lg-10 test1">
                            <p class="name">{{$user->name}} (@if($user->sex == 'male')<i class="fas fa-mars"></i>@else<i class="fas fa-venus"></i>@endif  age {{$user->birthday}})</p>
                            <p>{{$user->email}} &nbsp {{$user->phone}} &nbsp {{$user->address}}</p>
                         </div>
                        <!--<div class="col-lg-2 test1">
                            <p class="name">DataLogic</p>
                            <p>HR</p>
                             </div>-->
                        <!--<div class="col-lg-2 test1">
                                <p class="name">ArtSoft</p>
                                <p>Developer</p>
                             </div>-->
                        <div class="col-lg-1 text-center test2">
                            <a class="link3" href="#"><i class="fas fa-user-edit fa-2x"></i></a>
                         </div>
                 </div>
            @endforeach
                    <!-- Не добавлять в проект-->
                    <!-- <div class="row align-items-center text">
                            <div class="col-lg-1 text-center">
                                <input type="checkbox" id="scales" name="scales">
                             </div>
                            <div class="col-lg-1 text-left test1">
                                <img class="img" src="  " alt="">
                             </div>
                            <div class="col-lg-5 test1">
                                <p class="name">Andrew Wilson (<i class="fas fa-mars"></i> age 38)</p>
                                <p>andrewww@gmail.com &nbsp 10-4343-0055 &nbsp Mons, Belgium</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">DataLogic</p>
                                <p>HR</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">ArtSoft</p>
                                <p>Developer</p>
                             </div>
                            <div class="col-lg-1 text-center test2">
                            <a class="link3" href="#"><i class="fas fa-file-download fa-2x"></i></a>
                         </div>
                         </div>
                    <div class="row align-items-center text">
                        <div class="col-lg-1 text-center">
                            <input type="checkbox" id="scales" name="scales">
                         </div>
                        <div class="col-lg-1 text-left test1">
                            <img class="img" src="   " alt="">
                         </div>
                        <div class="col-lg-5 test1">
                            <p class="name">Andrew Wilson (<i class="fas fa-mars"></i> age 38)</p>
                            <p>andrewww@gmail.com &nbsp 10-4343-0055 &nbsp Mons, Belgium</p>
                         </div>
                        <div class="col-lg-2 test1">
                            <p class="name">DataLogic</p>
                            <p>HR</p>
                         </div>
                        <div class="col-lg-2 test1">
                            <p class="name">ArtSoft</p>
                            <p>Developer</p>
                         </div>
                        <div class="col-lg-1 text-center test2">
                            <a class="link3" href="#"><i class="fas fa-file-download fa-2x"></i></a>
                         </div>
                     </div>
                    <div class="row align-items-center text">
                            <div class="col-lg-1 text-center">
                                <input type="checkbox" id="scales" name="scales">
                             </div>
                            <div class="col-lg-1 text-left test1">
                                <img class="img" src="   " alt="">
                             </div>
                            <div class="col-lg-5 test1">
                                <p class="name">Andrew Wilson (<i class="fas fa-mars"></i> age 38)</p>
                                <p>andrewww@gmail.com &nbsp 10-4343-0055 &nbsp Mons, Belgium</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">DataLogic</p>
                                <p>HR</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">ArtSoft</p>
                                <p>Developer</p>
                             </div>
                            <div class="col-lg-1 text-center test2">
                                <a class="link3" href="#"><i class="fas fa-file-download fa-2x"></i></a>
                             </div>
                     </div>
                    <div class="row align-items-center text">
                            <div class="col-lg-1 text-center">
                                <input type="checkbox" id="scales" name="scales">
                             </div>
                            <div class="col-lg-1 text-left test1">
                                <img class="img" src=" " alt="">
                             </div>
                            <div class="col-lg-5 test1">
                                <p class="name">Andrew Wilson (<i class="fas fa-mars"></i> age 38)</p>
                                <p>andrewww@gmail.com &nbsp 10-4343-0055 &nbsp Mons, Belgium</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">DataLogic</p>
                                <p>HR</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">ArtSoft</p>
                                <p>Developer</p>
                             </div>
                            <div class="col-lg-1 text-center test2">
                                <a class="link3" href="#"><i class="fas fa-file-download fa-2x"></i></a>
                             </div>
                     </div>
                    <div class="row align-items-center text">
                            <div class="col-lg-1 text-center">
                                <input type="checkbox" id="scales" name="scales">
                             </div>
                            <div class="col-lg-1 text-left test1">
                                <img class="img" src="  " alt="">
                             </div>
                            <div class="col-lg-5 test1">
                                <p class="name">Andrew Wilson (<i class="fas fa-mars"></i> age 38)</p>
                                <p>andrewww@gmail.com &nbsp 10-4343-0055 &nbsp Mons, Belgium</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">DataLogic</p>
                                <p>HR</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">ArtSoft</p>
                                <p>Developer</p>
                             </div>
                            <div class="col-lg-1 text-center test2">
                                <a class="link3" href="#"><i class="fas fa-file-download fa-2x"></i></a>
                             </div>
                     </div>
                    <div class="row align-items-center text">
                            <div class="col-lg-1 text-center">
                                <input type="checkbox" id="scales" name="scales">
                             </div>
                            <div class="col-lg-1 text-left test1">
                                <img class="img" src="  " alt="">
                             </div>
                            <div class="col-lg-5 test1">
                                <p class="name">Andrew Wilson (<i class="fas fa-mars"></i> age 38)</p>
                                <p>andrewww@gmail.com &nbsp 10-4343-0055 &nbsp Mons, Belgium</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">DataLogic</p>
                                <p>HR</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">ArtSoft</p>
                                <p>Developer</p>
                             </div>
                            <div class="col-lg-1 text-center test2">
                                <a class="link3" href="#"><i class="fas fa-file-download fa-2x"></i></a>
                             </div>
                     </div>
                    <div class="row align-items-center text">
                            <div class="col-lg-1 text-center">
                                <input type="checkbox" id="scales" name="scales">
                             </div>
                            <div class="col-lg-1 text-left test1">
                                <img class="img" src=" " alt="">
                             </div>
                            <div class="col-lg-5 test1">
                                <p class="name">Andrew Wilson (<i class="fas fa-mars"></i> age 38)</p>
                                <p>andrewww@gmail.com &nbsp 10-4343-0055 &nbsp Mons, Belgium</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">DataLogic</p>
                                <p>HR</p>
                             </div>
                            <div class="col-lg-2 test1">
                                <p class="name">ArtSoft</p>
                                <p>Developer</p>
                             </div>
                            <div class="col-lg-1 text-center test2">
                                <a class="link3" href="#"><i class="fas fa-file-download fa-2x"></i></a>
                             </div>
                     </div> -->
                <div class="button_open_popup">
                    <button class="button_add_users">
                    <span class="open"></span>
                    </button>
                 </div>
             </div>
         </div>

    {{--<div class="container popup">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3 text-left add_user">--}}
                {{--<h2>Add User</h2>--}}
             {{--</div>--}}
            {{--<div class="col-lg-1 offset-8">--}}
                {{--<span class="close"></span>--}}
             {{--</div>--}}
         {{--</div>--}}
            {{--<div class="row personal_contacts">--}}
                {{--<div class="col-lg-1 text-right">--}}
                    {{--<i class="fas fa-clipboard-list fa-2x"></i>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-4 text-left">--}}
                    {{--<p align="center">PERSONAL CONTACTS</p>--}}
                 {{--</div>--}}
             {{--</div>--}}
        {{--<form>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-2 text-left">--}}
                    {{--<p>First Name</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-4">--}}
                    {{--<input type="text" name="first name">--}}
                 {{--</div>--}}
                {{--<div class="col-lg-3 text-left">--}}
                   {{--<p>Personnal email</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-3">--}}
                    {{--<input type="text" name="first name">--}}
                 {{--</div>--}}
                {{--<div class="col-lg-2 text-left">--}}
                    {{--<p>Last Name</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-4">--}}
                    {{--<input type="text" name="last name">--}}
                 {{--</div>--}}
                {{--<div class="col-lg-3 text-left">--}}
                    {{--<p>Personnal phone</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-3">--}}
                    {{--<input type="text" name="personnal phone">--}}
                 {{--</div>--}}
                {{--<div class="col-lg-2 text-left">--}}
                    {{--<p>Photo</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-4">--}}
                    {{--<a href="">Upload File</a></p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-3 text-left">--}}
                    {{--<p>Personnal address</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-3">--}}
                    {{--<input type="text" name="personnal phone">--}}
                 {{--</div>--}}
                {{--<div class="col-lg-2 text-left">--}}
                    {{--<p>Date of Birth</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--<input type="date" name="bday" max="1900-01-01">--}}
                 {{--</div>--}}
                {{--<div class="col-lg-2 text-left">--}}
                    {{--<p>Birthplace</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--<input type="text" name="personnal phone">--}}
                 {{--</div>--}}
                {{--<div class="col-lg-2 text-left">--}}
                    {{--<p>Date of Death</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--<input type="date" name="bday" max="2018-12-31">--}}
                 {{--</div>--}}
                {{--<div class="col-lg-2 text-left">--}}
                    {{--<p>Sex</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--<input class="checkbox" type="radio" name="bday" max="2018-12-31">--}}
                    {{--<label >Male</label>--}}
                    {{--<input class="checkbox" type="radio" name="bday" max="2018-12-31">--}}
                    {{--<label>Female</label>--}}
                 {{--</div>--}}
             {{--</div>--}}
                {{--<hr/>--}}
            {{--<div class="row personal_contacts">--}}
                {{--<div class="col-lg-1 text-right">--}}
                    {{--<img src="img/phone-book.png" alt="книга">--}}
                 {{--</div>--}}
                {{--<div class="col-lg-11 text-left">--}}
                    {{--<p>CONTACTS</p>--}}
                 {{--</div>--}}
             {{--</div>--}}
            {{--<div class="row add_contacts">--}}
                {{--<div class="col-lg-4">--}}
                    {{--<p>Add Contacts</p>--}}
                 {{--</div>--}}
                {{--<div class="col-lg-8">--}}
                    {{--<input type="text" name="add contacts">--}}
                 {{--</div>--}}
             {{--</div>  --}}
            {{--<hr/>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-2">--}}
                    {{--<p>Как познакомильcь</p>--}}
                {{--</div>--}}
                {{--<div class="col-lg-10">--}}
                    {{--<select name="users" size="1" >--}}
                        {{--<option value="1" selected>Семья</option>--}}
                        {{--<option value="s2" >Работа</option>--}}
                        {{--<option value="s3">Учеба</option>--}}
                        {{--<option value="s4">Друзья</option>--}}
                     {{--</select>--}}
                 {{--</div>--}}
             {{--</div>--}}
         {{--</form>--}}
     {{--</div>      --}}

 </body>
 </html>
