@extends('layouts.app')

{{--@extends('layouts.head')--}}
@section('content')
    <body>
    <div id="app">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.png" align="center"><span class="Poly">PolyMath</span></a>
        </div>



        <main class="py-4">
            <div class="row">
                <p class="card-header">Log In</p>

                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    {{--<input type="hidden" name="_token" value="R9nIuIOgs3vinojjbuCgDEAFVoFJjBpqbeZO0k3J">--}}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <label for="email" class="col-sm-4 col-form-label text-md-right"></label>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                        <div class="col-md-6">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password"><br>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Log In
                    </button><br>
                    <div class="btn-link">

                        <a href="{{ route('password.request') }}">

                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </main>
    </div>
    </body>
@endsection


