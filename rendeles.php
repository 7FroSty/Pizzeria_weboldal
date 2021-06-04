<?php session_start();?>

<?php if(!isset($_SESSION['file'])){$_SESSION['file']="";}?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Fekete-Falusi Pizzéria - Rendelés</title>
    <meta charset="UTF-8"/>
    <meta name="author" content="Falusi Sándor Viktor, Fekete Tomaj Erk"/>
    <link rel="icon" type="image/png" href="kepek/ikon.png"/>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
		main{
			height: 600px;
		}
        aside {
            border: 3px solid #73AD21;
            border-left: 3px solid #73AD21;
            border-radius: 0px 15px 15px 0px;
            width: 50%;
            height: 600px;
            background-color: #FFA600;
            float: right;
			}
		hr {
			 border: 1.5px solid #73AD21;
			}
        textarea{
            height: 50px;
            width: 302px;
            resize: none;
        }
        select{
            width: 172px;
        }
        #tartalom{
            font-size: 1.565vw;
			text-decoration: underline;
            margin-left: 17px;
            margin-top: 5px;
            margin-bottom: 5px;
        }
		#tartalom::selection {
			color: #008000;
			background-color: #FF6347;
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
		#rendeleskovetes {
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
		#rendeleskovetes:hover {
			background-color: #008000;
			}
		#vegosszeg{
			margin-left: 15px;
			position: relative;
			top: 0;
			height: 60px;
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
        <li><a class="navlink currentlink" href="rendeles.php">Rendelés</a></li>
        <li><a class="navlink" href="kapcsolat.php">Kapcsolat</a></li>
        <li><a class="navlink" href="galeria.php">Galéria</a></li>
		<li><a class="navlink" href="fiok.php">Fiók</a></li>
    </ul>
</nav>
<aside>
    <h2 id="tartalom">Kosár tartalma:</h2>
    <hr>
	<?php
		if(!file_exists($_SESSION['file'])){
			echo "<span style='margin-left: 15px; font-size: 1.217vw; color: red;'><strong>A kosár üres!</strong></span>";
		}
		else { 
		$file = fopen($_SESSION['file'], "r");
		while (($line=fgets($file)) !== false){
					$foo[]=unserialize($line);
		}
		$_SESSION['kosar']=$foo;
		fclose($file);
	?>
	<div id="kossar">
		<ol>
		<?php foreach ($foo as $a) { ?>
			<li><strong><?php echo $a['aru'];echo(" "); echo $a["ar"]; echo(" Ft");?></strong></li>
		<?php } ?>
		</ol>
	</div>
	<?php { ?>
			<?php $osszeg = 0; ?>
			<?php foreach ($foo as $a) {
				$osszeg += $a["ar"]*$a["darab"];
			} ?>
			<div id="vegosszeg"><strong>Összesen: <?php echo $osszeg; echo(" Ft")?></strong></div>
			<form action="rendeles.php" method="POST">
				<input name="remove" type="submit" value="Kosár törlése">
			</form>
		<?php } } ?>
</aside>
<main>
    <form action="rendeles.php" method="POST">
        <label>Teljes név:
        <input name="fullName" type="text" <?php if (isset($_SESSION["user"])){ ?> value=<?php echo $_SESSION["user"]; } else{ ?> placeholder="Példa János"<?php } ?>><br></label>
        <label>E-mail cím:
        <input name="email" type="email" <?php if (isset($_SESSION["user"])){ ?> value=<?php echo $_SESSION["useremail"]; } else{ ?> placeholder="email@valami.hu"<?php } ?>><br></label>
        <label>Telefonszám:
        <input name="phone" type="tel" <?php if (isset($_SESSION["user"])){ ?> value=<?php echo $_SESSION["userphone"]; } else{ ?> placeholder="069420"<?php } ?>><br></label>
        <label>Település:
        <input name="city" type="text" value="Szolnok"><br></label>
        <label>Utca:
        <input name="street" type="text"><br></label>
        <label>Házszám:
        <input name="houseNumber" type="text" placeholder="Házszám/emelet/ajtó"><br></label>
        <label>Fizetési eszköz:
        <select name="paymentMethod">
            <option value="Készpénz" disabled>Készpénz</option>
            <option selected value="Bankkártya">Bankkártya</option>
            <option value="Szép kártya">Szép kártya</option>
            <option value="Erzsébet utalvány" disabled>Erzsébet utalvány</option>
        </select><br></label>
            <label>Megjegyzés a futárnak:
            <textarea name="comment" placeholder="Maximum 200 karakter" maxlength="200" style="margin-left: 15px;"></textarea><br/></label>
            <input name="elkuld" type="submit" value="Rendelés leadása"><br>
    </form>
	<a id="rendeleskovetes" href="kovetes.php" style="margin-left: 15px;">Rendelés követése</a>

    <?php
	if (isset($_POST["remove"])){
		unset($_POST["remove"]);
		unlink($_SESSION['file']);
		echo "<meta http-equiv='refresh' content='0'>";
	}
	
	$fullName="";
	$email="";
	$phone="";
	$city="";
	$street="";
	$houseNumber="";
	$paymentMethod="";
	$comment="";
	
	
    if (isset($_POST["elkuld"])) {

        if(empty($_POST["fullName"])){
			die("<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező nevet megadni!</strong></span>");
		}
        else {
            $fullName = $_POST["fullName"];
		}

        if(empty($_POST["email"])){
			die("<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező emailt megadni!</strong></span>");
		}
        else {
            $email = $_POST["email"];
		}

        if(empty($_POST["phone"])){
            die("<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező telefonszámot megadni!</strong></span>");
		}
        else {
			$phone = $_POST["phone"];
		}

        if(empty($_POST["city"])){
			die("<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező települést megadni!</strong></span>");
		}
        else {
            $city = $_POST["city"];
		}

        if(empty($_POST["street"])){
			die("<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező utcát megadni!</strong></span>");
		}
        else {
            $street = $_POST["street"];
		}

        if(empty($_POST["houseNumber"])){
			die("<br><span style='margin-left: 15px; font-size: 1.05vw;; color: red;'><strong>HIBA: Kötelező házszámot megadni!</strong></span>");
		}
        else {
            $houseNumber = $_POST["houseNumber"];
		}
		
		$paymentMethod = $_POST["paymentMethod"];
        $comment = $_POST["comment"];
		
		$temp = str_replace(" ", "", $fullName);
		$code = $temp . date("m.d.H.i");
		
		if(!file_exists($_SESSION['file'])){
			$message = "Sikertelen rendelés, a kosara üres!";
			die("<script type='text/javascript'>alert('$message');</script>");
		}
		
		else {
		$message = "Sikeres rendelés! Kód: $code";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
        $file = fopen("rendelesek/$code.txt", "w");
		//$estimate = if()
		
		$torder="";
		
		foreach($_SESSION['kosar'] as $a){
			$torder = $torder. $a["aru"] . " " . $a["darab"] . " db, ";
		}
		
		$tdate = date("Y.m.d H:i:s");
			
		$order = ["code" => $code, "date" => $tdate, "name" => $fullName, "email" => $email, "phone" => $phone, "city" => $city,
		"street" => $street, "houseNumber" => $houseNumber, "paymentMethod" => $paymentMethod, "comment" => $comment,
		"price" => $osszeg, "items" => $torder];
		
        fwrite($file, serialize($order) . "\n");
        fclose($file);
		}
    }
    ?>
</main>
<footer>
    <p>© 2020, Fekete-Falusi Kft. Minden jog fenntartva.</p>
</footer>
</body>
</html>