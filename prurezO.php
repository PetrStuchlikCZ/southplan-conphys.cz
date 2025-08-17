<?php

require "assets/auth.php";

session_start();


$cookieBar = "";
if(!cookieBar()){
	//vyskočí na uživatele cookie lišta --> souhlas/nesouhlas se uloží do session cookie_agreement
	// lišta = formulář, odešle se na cookieSetting.php
	$fromCookie = "prurezO.php";
	$cookieBar = "<div id='cookieConsent' >
						<p>Používáme <a href='accesories/podminky.php'>cookies</a> pro zlepšení vašeho zážitku. Souhlasíte? Bez souhlasu však může dojít k omezení některých funkcí.</p>
						<form action='cookieSetting.php' method='POST' >
							<input type='text' style='display: none;' name='from' value='$fromCookie'>
							<button type='submit' id='cookieAccept' name='accept_cookies' >Souhlasím</button>
							<button type='submit' id='cookieDecline' name='decline_cookies' >Nesouhlasím</button>
						</form>
					</div>";
};
$emailAddSuccess = "";
$emailAddInPast = "";


$permission_statika = "on";
?>

<!DOCTYPE html>
<html lang="cs">
<head>
<?php include "assets/analytics.php"; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta name="description" content="Získejte cenovou nabídku na míru pro vaše stavební výkresy. Vyplňte jednoduchý formulář a my vám poskytneme nezávaznou nabídku podle vašich potřeb."> -->
	<link rel="icon" type="image" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/stylyGeodezie.css">
	<link rel="stylesheet" type="text/css" href="css/stylyStatika.css">
    <link rel="stylesheet" type="text/css" href="css/cookieBar.css">
	<link rel="stylesheet" type="text/css" href="css/stylyEmailFooter.css">
	<link rel="stylesheet" type="text/css" href="css/queries/queriesGeodezie.css">
	<link rel="canonical" href="https://www.southplan-conphys.cz/statika">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
    <script src="https://kit.fontawesome.com/d5a5ebca56.js" crossorigin="anonymous"></script>

	<!-- <meta property="og:title" content="Podání nezávazné poptávky na stavební výkresy | Southplan">
    <meta property="og:description" content="Získejte cenovou nabídku na míru pro vaše stavební výkresy. Vyplňte jednoduchý formulář a my vám poskytneme nezávaznou nabídku podle vašich potřeb."> -->
    <meta property="og:url" content="https://www.southplan-conphys.cz/statika">
    <meta property="og:type" content="website">

	<title>Statika | Southplan</title>
</head>
<body>
<!-- HLAVIČKA -->
    <header>
		<nav class="horni">
				<div class="logo"><a href="index.php"><img src="images\logo_1920px.png" alt="logo Southplan"></a></div>
				<?php include "assets/menu.php"; ?>
				<?php include "assets/mobilMenu.php"; ?>
				
		</nav>
    </header>
<!-- OBSAH -->
<main> 
	<section class="nahled" <?php if($permission_statika == "off"){
			echo "style='min-height: 100vh;'";
		} ?>>
		<?= $emailAddSuccess ?>
		<?= $emailAddInPast ?>
		<?= $cookieBar ?>
		<?php if($permission_statika == "off"): ?>
				<section id='sentSuccess'>
					<div class="wait">
						<div class='success' style="border: none !important;">
							<i class="fa-regular fa-clock fa-2xl" style="color: #24a669; transform: scale(1.5);"></i>
						</div>
						<h3>Zde pro vás připravujeme stránku pro online výpočty statiky</h3>
					</div>
				</section>
		<?php else: ?>
            <section class="formPrurezy">
                <section id="buttonTagsPrurezy">
                    <a href="prurezI.php" class='tagButton' id='prurezI'><img src="images/I_200x200px.png" alt="Průřez I"></a>
                    <a href="prurezH.php"  class='tagButton' id='prurezH'><img src="images/H_200x200px.png" alt="Průřez H"></a>
					<a href="prurezT.php"  class='tagButton' id='prurezT'><img src="images/T_200x200px.png" alt="Průřez T"></a>
					<a href="prurezOpakT.php" class='tagButton' id='prurezOpakT'><img src="images/Opak_T_200x200px.png" alt="Průřez obrácené T"></a>
                    <a href="prurezU.php"  class='tagButton' id='prurezU'><img src="images/U_200x200px.png" alt="Průřez U"></a>
					<a href="prurezN.php"  class='tagButton' id='prurezN'><img src="images/N_200x200px.png" alt="Průřez obrácené U"></a>
					<a href="prurezO.php"  class='tagButton' id='prurezOmain'><img src="images/O_zelena_200x200px.png" alt="Průřez O"></a>
					<a href="prurezTram.php"  class='tagButton' id='prurezTram'><img src="images/Trám_200x200px.png" alt="Průřez Trám"></a>
				</section>
                <form class="zadaniPrurezu" id="O">
					<div id="AB">
						<div class="vstup">
                    		<div id="sirkaVyska">
								<div class="inputSV">
									<label for="polomer">Vnitřní poloměr (r)</label><br>
									<input type="number" placeholder="" id="polomer" name="polomer" value="" required>
								</div>
								<div class="inputTl">
									<label for="tloustka">Tloušťka stěny (c)</label><br>
									<input type="number" placeholder="" id="tloustka" name="tloustka" value="" required>
								</div>
							</div>
							<p>Pokud je průřez plný, tak r = 0, c je poloměr průřezu.</p>
						</div>
                    	<!-- tady bude obrazek -->
						<div class="ilustrace">
							<img id="imgVrstevnice" src="images/Průřez_O_schema_600x600px.png" alt="Obrázek průřezu tvaru O">
						</div>
					</div>
					<div class="vysledky">
						<h3><strong>Těžiště</strong></h3>
						<div id="sirkaVyska">
								<div class="inputSV">
									<label for="Yt">Yt</label><br>
									<input type="number" placeholder="" id="Yt" name="Yt" value="" required>
								</div>
								<div class="inputSV">
									<label for="Zt">Zt</label><br>
									<input type="number" placeholder="" id="Zt" name="Zt" value="" required>
								</div>
						</div>
						<h3><strong>Momenty setrvačnosti</strong></h3>
						<div id="sirkaVyska">
								<div class="inputSV">
									<label for="Iy">Iy</label><br>
									<input type="number" placeholder="" id="Iy" name="Iy" value="" required>
								</div>
								<div class="inputSV">
									<label for="Iz">Iz</label><br>
									<input type="number" placeholder="" id="Iz" name="Iz" value="" required>
								</div>
						</div>
						<h3><strong>Deviační moment</strong></h3>
						<div id="sirkaVyska">
								<div class="inputSV">
									<label for="Dyz">Dyz</label><br>
									<input type="number" placeholder="" id="Dyz" name="Dyz" value="" required>
								</div>
						</div>
					</div>
                </form>
            </section>
        <?php endif ?>
    </section>
</main>
<!-- PATIČKA -->

<?php 
	if(!isLoggedIn()){
		$from = "prurezO.php";
		include "assets/footer.php";
	} else {
		echo "<footer>
			<nav class='dolni'>
				<ul>
					<li><a href='accesories/howTo.php'>Postup zadání poptávky</a></li>
					<li><a href='accesories/cenik.php'>Ceník</a></li>
					<li><a href='accesories/kontakt.php'>Kontakt</a></li>
					<li><a href='accesories/oNas.php'>O nás</a></li>
					<li><a href='accesories/podminky.php'>Podmínky</a></li>
					<li><a href='admin/account.php?id=$userid'>Zaměstnanec</a></li>
					<div class='copy'><li>&copy;</li></div>
				</ul>
			</nav>
		</footer>";
	}
	
	 ?>
	
	<script src="javaScript/scriptPrurez.js"></script>
</body>
</html>