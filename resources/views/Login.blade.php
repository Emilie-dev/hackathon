<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eco Coach</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <header>  
        <nav>
            <div class="nav-wrapper">
                <img src="image/logo.jpg" class="brand-logo">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">inscription</a></li>
                    <li><a href="Login"></a>connexion</li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <form action="" method="Post">
            <div>
                <label>Email:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>Mot de passe</label>
                <input type="password" name="password">
            </div>
        </form>
    </main>



</body>
</html>
