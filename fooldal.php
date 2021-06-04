<!DOCTYPE html>
<html lang="hu">
<head>
	<title>Fekete-Falusi Pizzéria - Főoldal</title>
	<meta charset="UTF-8"/>
	<meta name="author" content="Falusi Sándor Viktor, Fekete Tomaj Erk"/>
	<link rel="icon" type="image/png" href="kepek/ikon.png"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		table {
			height: 20px;
			text-align: center;
			border-spacing: 20px;
			}
		#akcio {
			text-align: center;
			font-size: 2vw;
			animation: animacio 20s  linear infinite alternate;
			}
		@keyframes animacio {
			0% { color: red; }
			25% { color: purple; }
			50% { color: blue; }
			75% { color: green; }
			100% { color: yellow; }
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
			<li><a class="navlink currentlink" href="fooldal.php">Főoldal</a></li>
			<li><a class="navlink" href="etlap.php">Étlap</a></li>
			<li><a class="navlink" href="rendeles.php">Rendelés</a></li>
			<li><a class="navlink" href="kapcsolat.php">Kapcsolat</a></li>
			<li><a class="navlink" href="galeria.php">Galéria</a></li>
			<li><a class="navlink" href="fiok.php">Fiók</a></li>
		</ul>
	</nav>
	<main>
		<table>
			<tr>
				<td style="font-size: 2vw; color: red;"><b>Figyelem! A koronavírus miatt jelenleg csak bankkártyás és szépkártyás fizetést áll módunkban elfogadni!</b><hr style="border: 1px solid black"/></td>
			</tr>
			<tr>
				<th style="font-size: 1.05vw;">

					<b id="akcio" style="text-decoration: underline">Nyitási akció!</b>
					<br>
					<br>Minden 1300Ft-nál drágább 28cm-es pizza csak 1300Ft és minden 3000Ft-nál drágább 50cm-es pizza csak 3000Ft!
					<br>Minden 4000Ft-nál drágább rendelésért két db 2L-es Coca-Cola jár ajándékba!
					
				</th>
			</tr>
		</table>
	</main>
	<footer>
		<p>© 2020, Fekete-Falusi Kft. Minden jog fenntartva.</p>
	</footer>
</body>
</html>