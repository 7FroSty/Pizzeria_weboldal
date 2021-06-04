<!DOCTYPE html>
<html lang="hu">
<head>
	<title>Fekete-Falusi Pizzéria - Galéria</title>
	<meta charset="UTF-8"/>
	<meta name="author" content="Falusi Sándor Viktor, Fekete Tomaj Erk"/>
	<link rel="icon" type="image/png" href="kepek/ikon.png"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.galeria {
			text-align: center;
			margin: 1em;
			}
		.galeria img {
			margin: 1em;
			width: 250px;
			height: 250px;
			border: 3px solid #73AD21;
			border-radius: 15px 15px 15px 15px;	
			}
		.galeria img:hover {
			transition: 1.5s;
			transition-timing-function: ease;
			transform: scale(1.1);
			}
		footer {
			height: 50px;
			background-color: #FFFBD3;
			font-size: 0.7vw;
			float: right;
			}
	</style>
</head>
<body>
	<header>
		<h1 id="headerszoveg">Fekete -Falusi Pizzéria</h1>
	</header>
	<nav>
		<ul>
			<li><a class="navlink" href="fooldal.php">Főoldal</a></li>
			<li><a class="navlink" href="etlap.php">Étlap</a></li>
			<li><a class="navlink" href="rendeles.php">Rendelés</a></li>
			<li><a class="navlink" href="kapcsolat.php">Kapcsolat</a></li>
			<li><a class="navlink currentlink" href="galeria.php">Galéria</a></li>
			<li><a class="navlink" href="fiok.php">Fiók</a></li>
		</ul>
	</nav>
	<main>
		<div class="galeria">
			<a target="_blank" href="kepek/pizza1.jpg"><img src="kepek/pizza1.jpg" alt="Pizza1"></a>
			<a target="_blank" href="kepek/pizza2.jpg"><img src="kepek/pizza2.jpg" alt="Pizza2"></a>
			<a target="_blank" href="kepek/pizza3.jpg"><img src="kepek/pizza3.jpg" alt="Pizza3"></a>
			<a target="_blank" href="kepek/pizza4.jpg"><img src="kepek/pizza4.jpg" alt="Pizza4"></a>
			<a target="_blank" href="kepek/pizza5.jpg"><img src="kepek/pizza5.jpg" alt="Pizza5"></a>
			<a target="_blank" href="kepek/pizza6.jpg"><img src="kepek/pizza6.jpg" alt="Pizza6"></a>
			<a target="_blank" href="kepek/pizzateszta.jpg"><img src="kepek/pizzateszta.jpg" alt="Pizzatészta"></a>
			<a target="_blank" href="kepek/sutes.jpg"><img src="kepek/sutes.jpg" alt="Pizza sütés"></a>
		</div>
	</main>
	<footer>
		<p>© 2020, Fekete-Falusi Kft. Minden jog fenntartva.</p>
	</footer>
</body>
</html>