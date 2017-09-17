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

                    <li><a href="profil">Mon compte</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <section>
            <div>
                <h6>Mon Logement:</h6>
            <div class="info">
                <ul class="infoul">
                    <li>Type de logement: ....</li>
                    <li>Superficie: ....</li>
                </ul>
                <ul class="infoul">
                    <li>Chauffage electrique: ...</li>
                    <li>Nombre de résident(s): ...</li>
                </ul>
                <ul class="infoul">
                    <li><button><a href="account">Modifier mon profil</a></button></a></li>
                </ul>
            </div>
                <hr>
            </div>
        </section>
        <section class="row">
            <div class="col s3">
                <ul>
                    <h6>Historique :</h6>
                    <li> ...</li>
                    <li>...</li>
                    <li>...</li>
                </ul>
            </div>
            <div class="col s9">
                <h6>Mon programme</h6>
                <div>
                    <form action="">
                        <label for="">Mon compteur:</label>
                        <input type="text" placeholder="relevé du compteur">
                        <label for="">Programme:</label>
                        <legend>3 choix max.</legend>
                        <ul>
                            <li>
                                <input type="checkbox">
                                <label for="">Programme1</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label for="">Programme2</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label for="">Programme3</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label for="">Programme4</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label for="">Programme5</label>
                            </li>
                            
                        </ul>
                    </form>
                    <button>

                        <a href="result">Valider</a>
                    </button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>