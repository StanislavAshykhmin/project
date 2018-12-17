<div class="wrap">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class=" col-6 col-lg-3 Users knopka">
                    <img class="logo" src="img/logo.png" alt="Logo site">
                    <a href="{{route('home')}}">Users</a>
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
            <div class="row align-items-center text">
                <div class="col-2 col-lg-1 text-left test1">
                    <img class="img" src="{{asset('storage/'.$user->photo)}}" alt="">
                </div>
                <div class=" col-8 col-lg-9 test1">
                    <p class="name">{{$user->name}}</p>
                    <p> {{$user->birthday}}, {{$user->address}} &nbsp &nbsp &nbsp   <i class="fas fa-mars"></i>&nbsp {{$user->age()}} y.o.</p>
                </div>
            </div>
        </div>