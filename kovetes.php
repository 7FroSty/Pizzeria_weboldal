<?php session_start();?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Fekete-Falusi Pizzéria - Követés</title>
    <meta charset="UTF-8"/>
    <meta name="author" content="Falusi Sándor Viktor, Fekete Tomaj Erk"/>
    <link rel="icon" type="image/png" href="kepek/ikon.png"/>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        div.form{
            text-align: center;
        }
        form
        {
            display: inline-block;
            margin-top: 30px;
			margin-bottom: 30px;
            text-align: left;
        }
		input[type="submit"] {
			font-size: 1.217vw;
			font-weight: bold;
			color: black;
			border: 3px solid #73AD21;
			border-radius: 15px 15px 15px 15px;
            background-color: #FF6347;
			text-decoration: none;
			padding:  0.2em;
            line-height: 30px;
			margin-left: 15px;
			}
		input[type="submit"]:hover {
			background-color: #008000;
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
        <li><a class="navlink" href="galeria.php">Galéria</a></li>
		<li><a class="navlink" href="fiok.php">Fiók</a></li>
    </ul>
</nav>
<?php if(isset($_SESSION["user"])) { ?>
	<main>
		<div class="form">
			<form action="kovetes.php" method="POST">
				<input size="30" name="rendelesazonosito" type="text" placeholder="Írja be ide az azonosító-kódot!" maxlength="20">
				<input name="submit" value="Rendelés követése" type="submit">
			</form>
			<?php
			if (isset($_POST["submit"])){
				
				if(empty($_POST["rendelesazonosito"])){
					die("<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező kódot megadni!</strong></span>");
				}
				else {
					$orderCode = $_POST["rendelesazonosito"];
				}
				
				$str="rendelesek/$orderCode.txt";
				$file = fopen("$str","r");
				$temppp=file_get_contents("$str");
				$foo = unserialize($temppp);
				fclose($file);
				echo "<p style='text-align: center; font-size: 1.217vw;'><strong>Kód: <span style='color: #008000; font-size: 1.05vw;'>" . $foo["code"] . "</span></strong></p>";
				echo "<p style='text-align: center; font-size: 1.217vw;'><strong>Név: <span style='color: #008000; font-size: 1.05vw;'>" . $foo["name"] . "</span></strong></p>";
				echo "<p style='text-align: center; font-size: 1.217vw;'><strong>Telefonszám: <span style='color: #008000; font-size: 1.05vw;'>" . $foo["phone"] . "</span></strong></p>";
				echo "<p style='text-align: center; font-size: 1.217vw;'><strong>Cím: <span style='color: #008000; font-size: 1.05vw;'>" . $foo["city"] . " " . $foo["street"] . " " . $foo["houseNumber"] . "</span></strong></p>";
				echo "<p style='text-align: center; font-size: 1.217vw;'><strong>Fizetési mód: <span style='color: #008000; font-size: 1.05vw;'>" . $foo["paymentMethod"] .  "</span></strong></p>";
				echo "<p style='text-align: center; font-size: 1.217vw;'><strong>Végösszeg: <span style='color: #008000; font-size: 1.05vw;'>" . $foo["price"] . " Ft </span></strong></p>";
				echo "<p style='text-align: center; font-size: 1.217vw;'><strong>Rendelt ételek/italok: <span style='color: #008000; font-size: 1.05vw;'>" . $foo["items"] . "</span></strong></p>";
			}
			?>
		</div>
	</main>
<?php } if(!isset($_SESSION["user"])) { ?>
	<main>
		<div class="form">
			<h1 style="color: red;">Csak belépett felhasználó követheti nyomon a szállítmányt!</h1>
			<form action="kovetes.php" method="GET">
				<input name="bar" type="submit" value="OK"><br/>
			</form>
			<?php
			if(isset($_GET["bar"])){
				header("Location: fiok.php");
			}
			?>
		</div>
	</main>
<?php } ?>
<footer>
    <p>© 2020, Fekete-Falusi Kft. Minden jog fenntartva.</p>
</footer>
</body>
</html>