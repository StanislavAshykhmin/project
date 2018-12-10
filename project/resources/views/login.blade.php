<body>
    <div id="app">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" align="center"><span class="Poly">PolyMath</span></a>
            </div>

             <form name="test" method="post" action="input1.php">
  
        <main class="py-4">
            <div class="row">
                <p class="card-header">Log In</p>
                <form method="POST" action="http://localhost:45001/login">
                <input type="hidden" name="_token" value="R9nIuIOgs3vinojjbuCgDEAFVoFJjBpqbeZO0k3J">
                <label for="email" class="col-sm-4 col-form-label text-md-right"></label>
                <input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Username">
                <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                <input id="password" type="password" class="form-control" name="password" required placeholder="Password"><br>
                <button type="submit" class="btn btn-primary">
                    Log In
                </button><br>
                <div class="btn-link">
                    <a href="#">
                        Forgot Password?
                    </a>
                </div>
                </form>
            </div>
        </main>
    </div>
</body>


