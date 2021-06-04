<?php session_start();?>

<!DOCTYPE html>

<?php	
	$code = date("m.d.H");
	
	$_SESSION['file']=$code . ".txt";
	
	
	$marg = ["aru" => "Margaréta 28cm", "ar" => "1500", "darab" => "1"];
	$margn = ["aru" => "Margaréta 50cm", "ar" => "3000", "darab" => "1"];
	$soku = ["aru" => "Sonkás-kukoricás 28cm", "ar" => "1600", "darab" => "1"];
	$sokun = ["aru" => "Sonkás-kukoricás 50cm", "ar" => "3150", "darab" => "1"];
	$haw = ["aru" => "Hawaii 28cm", "ar" => "1700", "darab" => "1"];
	$hawn = ["aru" => "Hawaii 50cm", "ar" => "3200", "darab" => "1"];
	$mex = ["aru" => "Mexikói 28cm", "ar" => "1750", "darab" => "1"];
	$mexn = ["aru" => "Mexikói 50cm", "ar" => "3350", "darab" => "1"];
	$hus = ["aru" => "Húsmártásos 28cm", "ar" => "1700", "darab" => "1"];
	$husn = ["aru" => "Húsmártásos 50cm", "ar" => "3200", "darab" => "1"];
	$negysajt = ["aru" => "4-sajtos 28cm", "ar" => "1800", "darab" => "1"];
	$negysajtn = ["aru" => "4-sajtos 50cm", "ar" => "3500", "darab" => "1"];
	$otkiv = ["aru" => "5 kívánság 28cm", "ar" => "1850", "darab" => "1"];
	$otkivn = ["aru" => "5 kívánság 50cm", "ar" => "3700", "darab" => "1"];
	$hetkiv = ["aru" => "7 kívánság 28cm", "ar" => "1900", "darab" => "1"];
	$hetkivn = ["aru" => "7 kívánság 50cm", "ar" => "3900", "darab" => "1"];
	$kil = ["aru" => "Kilencedik 28cm", "ar" => "4200", "darab" => "1"];
	$kiln = ["aru" => "Kilencedik 50cm", "ar" => "9000", "darab" => "1"];
	$cezarsal = ["aru" => "Cézár saláta", "ar" => "1100", "darab" => "1"];
	$gorogsasl = ["aru" => "Görög saláta", "ar" => "1100", "darab" => "1"];
	$fitsal = ["aru" => "Fitness saláta", "ar" => "1100", "darab" => "1"];
	$mexsal = ["aru" => "Mexikói saláta", "ar" => "1100", "darab" => "1"];
	$szviz = ["aru" => "Szénsavas ásványvíz 0.33l", "ar" => "220", "darab" => "1"];
	$szvizn = ["aru" => "Szénsavas ásványvíz 0.5l", "ar" => "260", "darab" => "1"];
	$viz = ["aru" => "Mentes ásványvíz 0.33l", "ar" => "220", "darab" => "1"];
	$vizn = ["aru" => "Mentes ásványvíz 0.5l", "ar" => "260", "darab" => "1"];
	$cola = ["aru" => "Kóla 0.33l", "ar" => "290", "darab" => "1"];
	$colan = ["aru" => "Kóla 0.5l", "ar" => "340", "darab" => "1"];
	$fanta = ["aru" => "Fanta 0.33l", "ar" => "290", "darab" => "1"];
	$fantan = ["aru" => "Fanta 0.5l", "ar" => "340", "darab" => "1"];
	$icetea = ["aru" => "Ice tea 0.33l", "ar" => "290", "darab" => "1"];
	$icetean = ["aru" => "Ice tea 0.5l", "ar" => "340", "darab" => "1"];
	$almale = ["aru" => "Almalé 0.33l", "ar" => "310", "darab" => "1"];
	$almalen = ["aru" => "Almalé 0.5l", "ar" => "360", "darab" => "1"];
	$narancs = ["aru" => "Narancslé 0.33l", "ar" => "310", "darab" => "1"];
	$narancsn = ["aru" => "Narancslé 0.5l", "ar" => "360", "darab" => "1"];
	$las = ["aru" => "Lasagne kis adag", "ar" => "1600", "darab" => "1"];
	$lasn = ["aru" => "Lasagne nagy adag", "ar" => "2000", "darab" => "1"];
	$carbona = ["aru" => "Carbona kis adag", "ar" => "1700", "darab" => "1"];
	$carbonan = ["aru" => "Carbona nagy adag", "ar" => "2100", "darab" => "1"];
	
?>


<html lang="hu">
<head>
    <title>Fekete-Falusi Pizzéria - Étlap</title>
    <meta charset="UTF-8"/>
    <meta name="author" content="Falusi Sándor Viktor, Fekete Tomaj Erk"/>
    <link rel="icon" type="image/png" href="kepek/ikon.png"/>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        @media print{
            main {
                border: none !important;
            }
            p{
                font-size: 12pt;
            }
            .tipus{
                font-size: 20pt !important;
            }
            td{
                color: black !important;
            }
            table{
                font-size: 15pt;
            }
            header{
                display: none;
            }
            input{
                display: none;
            }
            li{
                display: none;
            }
        }
        @page :left{
            margin: 0.5cm;
        }
        table{
            text-align: left;
            border-spacing: 20px;
        }
        thead{
            align-content: center;
        }
		.tipus {
			font-size: 1.217vw;
			text-decoration: underline;
			font-weight: bold;
			}
		.tipusnev {
			font-size: 0.85vw;
			font-weight: bold;
			}
		.ar {
			font-size: 0.85vw;
			color: #008000;
			font-weight: bold;
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
        <li><a class="navlink currentlink" href="etlap.php">Étlap</a></li>
        <li><a class="navlink" href="rendeles.php">Rendelés</a></li>
        <li><a class="navlink" href="kapcsolat.php">Kapcsolat</a></li>
        <li><a class="navlink" href="galeria.php">Galéria</a></li>
		<li><a class="navlink" href="fiok.php">Fiók</a></li>
    </ul>
</nav>
<main>
	<form action="etlap.php" method="GET">
    <table>
        <thead>
            <tr>
                <th id="pizzak" class="tipus">
                    Pizzák:
                </th>
                <th id="28cm" class="tipus">
                    28cm
                </th>
                <th id="50cm" class="tipus">
                    50cm
                </th>
				<th>
				</th>
                <th id="salatak" class="tipus">
                    Saláták:
                </th>
                <th id="salatar" class="tipus">
                    Ár
				</th>
				<th>
				</th>
				<th>
				</th>
			</tr>
        </thead>
        <tbody>
			<tr>
				<td headers="pizzak" class="tipusnev">
					Margaréta
				</td>
				<td headers="28cm" class="ar">
					1500	<input name="marg" type="submit" value="Kosárba">
				</td>
				<td headers="50cm" class="ar">
					3000	<input name="margn" type="submit" value="Kosárba">
				</td>
				<td>
				</td>
				<td headers="salatak" class="tipusnev">
					Cézár saláta
				</td>
				<td headers="salatar" class="ar">
					1100
				<td>
					<input name="cezarsal" type="submit" value="Kosárba">
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td headers="pizzak" class="tipusnev">
					Sonkás-kukoricás
				</td>
				<td headers="28cm" class="ar">
					1600	<input name="soku" type="submit" value="Kosárba">
				</td>
				<td headers="50cm" class="ar">
					3150	<input name="sokun" type="submit" value="Kosárba">
				</td>
				<td>
					
				</td>
				<td headers="salatak" class="tipusnev">
					Görög saláta
				</td>
				<td headers="salatar" class="ar">
					1100
				</td>
				<td>
					<input name="gorogsasl" type="submit" value="Kosárba">
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td headers="pizzak" class="tipusnev">
					Hawaii
				</td>
				<td headers="28cm" class="ar">
					1700	<input name="haw" type="submit" value="Kosárba">
				</td>
				<td headers="50cm" class="ar">
					3200	<input name="hawn" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
				<td headers="salatak" class="tipusnev">
					Fitness saláta
				</td>
				<td headers="salatar" class="ar">
					1100
				</td>
				<td>
					<input name="fitsal" type="submit" value="Kosárba">
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td headers="pizzak" class="tipusnev">
					Mexikói
				</td>
				<td headers="28cm" class="ar">
					1750	<input name="mex" type="submit" value="Kosárba">
				</td>
				<td headers="50cm" class="ar">
					3350	<input name="mexn" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
				<td headers="salatak" class="tipusnev">
					Mexikói saláta
				</td>
				<td headers="salatar" class="ar">
					1100
				</td>
				<td>
					<input name="mexsal" type="submit" value="Kosárba">
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td headers="pizzak" class="tipusnev">
					Húsmártásos
				</td>
				<td headers="28cm" class="ar">
					1700	<input name="hus" type="submit" value="Kosárba">
				</td>
				<td headers="50cm" class="ar">
					3300	<input name="husn" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
				<th id="uditok" class="tipus">
					Üdítők:
				</th>
				<th	id="0.33l" class="tipus">
					0.33l
				</th>
				<th id="0.5l" class="tipus">
					0.5l
				</th>
				<th>
				</th>
			</tr>
			<tr>
				<td headers="pizzak" class="tipusnev">
					4-sajtos
				</td>
				<td headers="28cm" class="ar">
					1800	<input name="negysajt" type="submit" value="Kosárba">
				</td>
				<td headers="50cm" class="ar">
					3500	<input name="negysajtn" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
				<td headers="uditok" class="tipusnev">
					Szénsavas ásványvíz
				</td>
				<td headers="0.33l" class="ar">
					220	<input name="szviz" type="submit" value="Kosárba">
				</td>
				<td headers="0.5l" class="ar">
					260	<input name="szvizn" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
			</tr>
			<tr>
				<td headers="pizzak" class="tipusnev">
					5 kívánság
				</td>
				<td headers="28cm" class="ar">
					1850	<input name="otkiv" type="submit" value="Kosárba">
				</td>
				<td headers="50cm" class="ar">
					3700	<input name="otkivn" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
				<td headers="uditok" class="tipusnev">
					Mentes ásványvíz
				</td>
				<td headers="0.33l" class="ar">
					220	<input name="viz" type="submit" value="Kosárba">
				</td>
				<td headers="0.5l" class="ar">
					260	<input name="vizn" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
			</tr>
			<tr>
				<td headers="pizzak" class="tipusnev">
					7 kívánság
				</td>
				<td headers="28cm" class="ar">
					1900	<input name="hetkiv" type="submit" value="Kosárba">
				</td>
				<td headers="50cm" class="ar">
					3900	<input name="hetkivn" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
				<td headers="uditok" class="tipusnev">
					Kóla
				</td>
				<td headers="0.33l" class="ar">
					290	<input name="cola" type="submit" value="Kosárba">
				</td>
				<td headers="0.5l" class="ar">
					340	<input name="colan" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
			</tr>
			<tr>
				<td headers="pizzak" class="tipusnev">
					Kilencedik
				</td>
				<td headers="28cm" class="ar">
					4200	<input name="kil" type="submit" value="Kosárba">
				</td>
				<td headers="50cm" class="ar">
					9000	<input name="kiln" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
				<td headers="uditok" class="tipusnev">
					Fanta
				</td>
				<td headers="0.33l" class="ar">
					290	<input name="fanta" type="submit" value="Kosárba">
				</td>
				<td headers="0.5l" class="ar">
					340	<input name="fantan" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
			</tr>
			<tr>
				<th id="tesztak" class="tipus">
					Tészták:
				</th>
				<th id="kisadag" class="tipus">
					Kis adag
				</th>
				<th id="nagyadag" class="tipus">
					Nagy adag
				</th>
				<th>
				</th>
				<td headers="uditok" class="tipusnev">
					Ice tea
				</td>
				<td headers="0.33l" class="ar">
					290	<input name="icetea" type="submit" value="Kosárba">
				</td>
				<td headers="0.5l" class="ar">
					340	<input name="icetean" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
			</tr>
			<tr>
				<td headers="tesztak" class="tipusnev">
					Lasagne
				</td>
				<td headers="kisadag" class="ar">
					1600	<input name="las" type="submit" value="Kosárba">
				</td>
				<td headers="nagyadag" class="ar">
					2000	<input name="lasn" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
				<td headers="uditok" class="tipusnev">
					Almalé
				</td>
				<td headers="0.33l" class="ar">
					310	<input name="almale" type="submit" value="Kosárba">
				</td>
				<td headers="0.5l" class="ar">
					360	<input name="almalen" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
			</tr>
			<tr>
				<td headers="tesztak" class="tipusnev">
					Carbona
				</td>
				<td headers="kisadag" class="ar">
					1700	<input name="carbona" type="submit" value="Kosárba">
				</td>
				<td headers="nagyadag" class="ar">
					2100	<input name="carbonan" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
				<td headers="uditok" class="tipusnev">
					Narancslé
				</td>
				<td headers="0.33l" class="ar">
					310	<input name="narancs" type="submit" value="Kosárba">
				</td>
				<td headers="0.5l" class="ar">
					360	<input name="narancsn" type="submit" value="Kosárba">
				</td>
				<td>
				
				</td>
			</tr>
		</tbody>
    </table>
	</form>
	<?php 
			if(isset($_GET["marg"])){
				$bar = serialize($marg);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);
			}
			if(isset($_GET["margn"])){
				$bar = serialize($margn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);
			}
			if(isset($_GET["soku"])){
				$bar = serialize($soku);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);
			}
			if(isset($_GET["sokun"])){
				$bar = serialize($sokun);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);
			}
			if(isset($_GET["haw"])){
				$bar = serialize($haw);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);
			}
			if(isset($_GET["hawn"])){
				$bar = serialize($hawn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["mex"])){
				$bar = serialize($mex);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["mexn"])){
				$bar = serialize($mexn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["hus"])){
				$bar = serialize($hus);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["husn"])){
				$bar = serialize($husn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["negysajt"])){
				$bar = serialize($negysajt);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["negysajtn"])){
				$bar = serialize($negysajtn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["otkiv"])){
				$bar = serialize($otkiv);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["otkivn"])){
				$bar = serialize($otkivn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["hetkiv"])){
				$bar = serialize($hetkiv);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["hetkivn"])){
				$bar = serialize($hetkivn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["kil"])){
				$bar = serialize($kil);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["kiln"])){
				$bar = serialize($kiln);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["cezarsal"])){
				$bar = serialize($cezarsal);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["gorogsasl"])){
				$bar = serialize($gorogsasl);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["fitsal"])){
				$bar = serialize($fitsal);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["mexsal"])){
				$bar = serialize($mexsal);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["szviz"])){
				$bar = serialize($szviz);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["szvizn"])){
				$bar = serialize($szvizn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["viz"])){
				$bar = serialize($viz);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["vizn"])){
				$bar = serialize($vizn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["cola"])){
				$bar = serialize($cola);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["colan"])){
				$bar = serialize($colan);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["fanta"])){
				$bar = serialize($fanta);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["fantan"])){
				$bar = serialize($fantan);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["icetea"])){
				$bar = serialize($icetea);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["icetean"])){
				$bar = serialize($icetean);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["almale"])){
				$bar = serialize($almale);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["almalen"])){
				$bar = serialize($almalen);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["narancs"])){
				$bar = serialize($narancs);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["narancsn"])){
				$bar = serialize($narancsn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["las"])){
				$bar = serialize($las);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["lasn"])){
				$bar = serialize($lasn);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["carbona"])){
				$bar = serialize($carbona);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
			if(isset($_GET["carbonan"])){
				$bar = serialize($carbonan);
				$fos = fopen($_SESSION['file'], "a");
				fwrite($fos, $bar . "\n");
				fclose($fos);			}
		
	?>
</main>
<footer>
    <p>© 2020, Fekete-Falusi Kft. Minden jog fenntartva.</p>
</footer>
</body>
</html>