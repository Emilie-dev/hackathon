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
        <ul>
            <li>

                <div>
                    <div>
                        <h5>{{$article['title']}} {{$article['averageEco']}}</h5>
                        <p>{{$article['describe']}}</p>
                        <p>posté le {{$article['created_at']}}</p>
                    </div>
                    <div>
                        <ul>
                            <li>
                                Like: {{$article['like']}}        
                            </li>
                            <li>
                                Commentaire:
                            </li>
                        </ul>
                        <div>

                        </div>
                    </div>
                    <div class="row">

                        <form action="/addComment/{{$article['id']}}" method="post">
                            <label>Votre commentaire</label>
                            <textarea></textarea>
                            <button type="submit" class='input-field col s6'>Envoyer</button>
                        </form>
                        <form>
                            <button type='submit' class='input-field col s6'>Like</button>
                        </form>
                    </div>
                </div>
            </li>
            <hr>
            <li>


                <div>
                    <div>
                        <h5>{{$article2['title']}} {{$article2['averageEco']}}</h5>
                        <p>{{$article2['describe']}}</p>
                        <p>posté le {{$article2['created_at']}}</p>
                    </div>
                    <div> 
                        <ul>
                            <li>
                                Like: {{$article2['like']}}        
                            </li>
                            <li>
                                Commentaire:
                            </li>
                        </ul>
                        <div>

                        </div>
                    </div>
                    <div class="row">

                        <form action="/addComment/{{$article2['id']}}" method="post">
                            <label>Votre commentaire</label>
                            <textarea></textarea>
                            <button type="submit" class='input-field col s6'>Envoyer</button>
                        </form>
                        <form>
                            <button type='submit' class='input-field col s6'>Like</button>
                        </form>
                    </div>
                    <hr>
                </li>
            </ul>
        </div>
    </main>


</body>
</html>
