@extends('layouts.head')
@section('content')
<body>
<div id="app">
    <div class="container">
       <a class="navbar-brand" href="#" ><img src="/public/img/logo.png" align="center"/><span class="Poly">PolyMath</span></a>
    </div>
<main class="py-4">
    <div class="row">
        <div class="Reset Password">
            <p>RESET PASSWORD</p>
            <p><span class="text">Please type your email, and we'll send you a reset link</span></p>
        <form method="POST" action="#">
        <input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Email">
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
