@extends('layouts.head')
@section('content')
<body>
<div id="app">
    <div class="container">
       <a class="navbar-brand" href="{{route('home')}}" ><img src="/img/logo.png" align="center"/><span class="Poly">PolyMath</span></a>
    </div>
<main class="py-4">
    <div class="row">
        <div class="Reset Password">
            <p>RESET PASSWORD</p>
            <p><span class="text">Please type your email, and we'll send you a reset link</span></p>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong style="display:block;">{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        <div class="btn-primary">
            <button type="submit" class="btn">
                    Send
            </button>
        </div>
        </form>
        </div>
    </div>
</main>
</div>
</body>
    @endsection
