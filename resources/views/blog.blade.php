<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eco Coach</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css" rel="stylesheet" type="text/css">

</head>
<body>
    <header>  
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @foreach ($article as $value)
        <div>
            <div>
                <h3>{{$value->title}} {{$value->averageEco}}</h3>
                <p>{{$value->describe}}</p>
                <p>Like: {{$value->like}}</p>
            </div>
            <form action="/addComment/{{$value->id}}" method="post">
                <label>Votre commentaire</label>
                <textarea></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
        @endforeach
    </main>


</body>
</html>
