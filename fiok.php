<?php session_start();?>

<!DOCTYPE html>
<html lang="hu">
<head>
	<title>Fekete-Falusi Pizzéria - Fiók</title>
	<meta charset="UTF-8"/>
	<meta name="author" content="Falusi Sándor Viktor, Fekete Tomaj Erk"/>
	<link rel="icon" type="image/png" href="kepek/ikon.png"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		main{
			height: 540px;
		}
		 aside {
            border: 3px solid #73AD21;
            border-left: 3px solid #73AD21;
            border-radius: 0px 15px 15px 0px;
            width: 50%;
            height: 540px;
            background-color: #FFA600;
            float: right;
			}
		hr {
			 border: 1.5px solid #73AD21;
			}
		.cim {
			font-size: 1.565vw;
			text-decoration: underline;
            margin-left: 17px;
            margin-top: 5px;
            margin-bottom: 5px;
			}
		label{
			font-size: 1.217vw;
			font-weight: bold;
            line-height: 50px;
            margin-left: 15px;
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
            line-height: 50px;
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
			<li><a class="navlink currentlink" href="fiok.php">Fiók</a></li>
		</ul>
	</nav>
	<?php if (isset($_SESSION["user"])){ ?>
		<main>
			<?php
				echo "<p style='text-align: center; font-size: 1.565vw; text-decoration: underline;'><strong>Adatok</strong></p>";
				echo "<p style='text-align: center; font-size: 1.217vw;'><strong>Név: <span style='color: #008000;'>" . $_SESSION["user"] . "</span></strong></p>";
				echo "<p style='text-align: center; font-size: 1.217vw;'><strong>E-mail: <span style='color: #008000;'>" . $_SESSION["useremail"] . "</span></strong></p>";
				echo "<p style='text-align: center; font-size: 1.217vw;'><strong>Telefonszám: <span style='color: #008000;'>" . $_SESSION["userphone"] . "</span></strong></p>";
			?>
			<form action="kijelentkezes.php" method="POST">
				<input style="margin-left: 43.5%;" type="submit" value="Kijelentkezés">
			</form>
		</main>
	<?php } if (!isset($_SESSION["user"])) { ?>
		<aside>
			<h2 class="cim" style="text-align: center;">Bejelentkezés</h2>
			<form action="fiok.php" method="POST">
				<label>E-mail cím:
				<input name="logemail" type="email"></label><br>
				<label>Jelszó:
				<input name="logpassword" type="password"></label><br>
				<input name="login" type="submit" value="Bejelentkezés">
			</form>
			<?php
				$logemail="";
				$logpassword="";
				if (isset($_POST["login"])){
					
					if(empty($_POST["logemail"])){
						echo "<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező emailt megadni!</strong></span>";
					}
					else {
						$logemail = $_POST["logemail"];
					}
					
					if(empty($_POST["logpassword"])){
						echo "<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező jelszót megadni!</strong></span>";
					}
					else {
						$logpassword = $_POST["logpassword"];
					}
					
					$accounts=[];
					
					$file=fopen("accounts.txt","r");
					
					while (($line=fgets($file)) !== false){
						$accounts[]=unserialize($line);
					}
					
					fclose($file);
					
					$message="<p style='margin-left: 15px; color: red;'><strong>Sikertelen bejelentkezés!</strong></p>";
					
					foreach ($accounts as $account){
						if ($logemail===$account["email"] && $logpassword===$account["password"]){
							$message = "";
							$_SESSION["user"]=$account["name"];
							$_SESSION["useremail"]=$account["email"];
							$_SESSION["userphone"]=$account["phone"];
							header("Location: fiok.php");
						}
					}
					
					if ($message!=="" && !empty($_POST["logemail"]) && !empty($_POST["logpassword"])){
						echo $message;
					}
				}
			?>
		</aside>
	<?php } if (!isset($_SESSION["user"])) { ?>
		<main>
				<h2 class="cim" style="text-align: center;">Regisztráció</h2>
			<form action="fiok.php" method="POST">
				<label>E-mail cím:
				<input name="email" type="email"></label><br>
				<label>Jelszó:
				<input name="password" type="password"></label><br>
				<label>Jelszó megerősítése:
				<input name="password2" type="password"></label><br>
				<label>Név:
				<input name="name" type="text"></label><br>
				<label>Telefonszám:
				<input name="phone" type="tel"></label><br>
				<input name="signup" type="submit" value="Regisztráció">
			</form>	
			<?php
				$email="";
				$password="";
				$password2="";
				$name="";
				$phone="";
				$errors=[];
				if (isset($_POST["signup"])){
					
					if(empty($_POST["email"])){
						echo "<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező emailt megadni!</strong></span>";
					}
					else {
						$email = $_POST["email"];
					}
					
					if(empty($_POST["password"])){
						echo "<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező jelszót megadni!</strong></span>";
					}
					else {
						$password = $_POST["password"];
					}
					
					if(empty($_POST["password2"])){
						echo "<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Meg kell ismételnie a jelszót!</strong></span>";
					}
					else {
						$password2 = $_POST["password2"];
					}
					
					if(empty($_POST["name"])){
						echo "<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező nevet megadni!</strong></span>";
					}
					else {
						$name = $_POST["name"];
					}
					
					if(empty($_POST["phone"])){
						echo "<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező telefonszámot megadni!</strong></span>";
					}
					else {
						$phone = $_POST["phone"];
					}
						
					$newaccount=["email" => $email, "password" => $password, "name" => $name, "phone" => $phone];
				
					$accounts=[];
					
					$file=fopen("accounts.txt","r");
					
					while (($line=fgets($file)) !== false){
						$accounts[]=unserialize($line);
					}
					
					fclose($file);
					
					foreach ($accounts as $account){
						if ($account["email"]===$email){
							$errors[]="<p style='margin-left: 15px; color: red;'><strong>Ezzel az e-mail címmel már regisztráltak!</strong></p>";
						}
					}
					
					if (strlen($password)<7){
						$errors[]="<p style='margin-left: 15px; color: red;'><strong>A jelszó túl rövid!</strong></p>";
					}
					
					if ($password !== $password2){
						$errors[]="<p style='margin-left: 15px; color: red;'><strong>A két jelszó nem egyezik!</strong></p>";
					}
					
					if (count($errors)===0){
						echo "<p style='margin-left: 15px; color: #008000;'><strong>Sikeres regisztráció!</strong></p>";
						$file=fopen("accounts.txt","a");
						fwrite ($file, serialize($newaccount) . "\n");
						fclose($file);
					} else {
						foreach ($errors as $error){
							echo $error;
						}
					}
				}
			?>
		</main>
	<?php } ?>
	<footer>
		<p>© 2020, Fekete-Falusi Kft. Minden jog fenntartva.</p>
	</footer>
</body>
</html>