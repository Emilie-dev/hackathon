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
					<li><a href="#"></a>connexion</li>
				</ul>
			</div>
		</nav>
	</header>
	<main>
		<div class='row'>
			<h5 class='philo'>
				Résultat du programme du 1 septembre au 30 septembre 2017
			</h5>
		</div>
		<div style="z-index:+1;">
			<div class='row'>
			<div class="col s12 ">
				<div class="card silver">
					<div class="card-content black-text">
						<p>Fin du programme</p>
						<label>saisir votre relevé de compteur</label> <input type="number" name="NewCompteur">      
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class='row'>
			<div class="col s12 ">
				<div class="card silver">
					<div class="card-content black-text">
						<ul>
							<li>Compteur électrique  mois dernier: 300kw</li>
							<li>Compteur électrique au cours du mois: 450kw</li>
							<li>Vous avez économisé:50% d'électricité (sois 30€ sur votre facture)</li>
						</ul>
						<button><a href="profil">Retour</a></button>
						<button><a href="blog">Partager</a></button>             
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>