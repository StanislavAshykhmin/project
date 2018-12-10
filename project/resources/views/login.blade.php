
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="R9nIuIOgs3vinojjbuCgDEAFVoFJjBpqbeZO0k3J">

    <title>PolyMath</title>

    <!-- Scripts -->
    <script src="js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="css/style-login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Muli" rel="stylesheet">
</head>
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
</html>

