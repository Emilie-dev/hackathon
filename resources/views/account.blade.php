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
            <a href="/">
                <img src="image/logo.jpg" class="brand-logo">
            </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">inscription</a></li>
                    <li><a href="Login">connexion</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <h3>Completer son profil</h3>
        <a href="profil">Remplir plus tard</a>
        <form action="/editAccount/" method="post">
        <div>
            <label for="name">Nom</label>
            <input type="text" id="name" name="lastName">
        </div>
        <div>
            <label for="firstName">Prénom</label>
            <input type="text" id="firstName" name="firstName">
        </div>
        <div>
            <label for="address">Adresse</label>
            <input type="text" id="address" name="address">
        </div>
        <div>
            <label for="city">Ville</label>
            <input type="text" id="city" name="city">
        </div>
        <div>
            <label for="zipCode">Code postal</label>
            <input type="number" id="zipCode" name="zipCode">
        </div>
        <div>
            <label for="region">Region</label>
            <input type="text" id="region" name="region">
        </div>
        <div>
            <label for="home">Nombre d'habitant</label>
            <input type="number" id="home" name="home">
        </div>
        <div>
            <label for="area">Superficie du logement</label>
            <input type="number" id="area" name="area"><p>m2</p>
        </div>
        <div>
            <label for="house">Type de logement</label>
            <input type="radio" name="houses" id="maison">
            <label for="maison">Maison</label>
            <input type="radio" name="houses" id="appart">
            <label for="appart">Appartement</label>
        </div>    
        <div>
            <label for="electricHeating">Chauffage electrique</label>
            <input type="checkbox" name="oui" id="">
                <label for="oui">Oui</label>
                
        </div>
        <div>
        </div>
        </form>
            <button ><a href="profil">Valider</a></button>
    </main>


</body>
</html>
