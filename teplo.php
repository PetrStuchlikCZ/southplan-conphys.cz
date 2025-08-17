<?php

require "assets/auth.php";

session_start();


$cookieBar = "";
if(!cookieBar()){
	//vyskočí na uživatele cookie lišta --> souhlas/nesouhlas se uloží do session cookie_agreement
	// lišta = formulář, odešle se na cookieSetting.php
	$fromCookie = "teplo.php";
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


$permission_teplo = "on";
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
	<link rel="canonical" href="https://www.southplan-conphys.cz/teplo">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
    <script src="https://kit.fontawesome.com/d5a5ebca56.js" crossorigin="anonymous"></script>

	<!-- <meta property="og:title" content="Podání nezávazné poptávky na stavební výkresy | Southplan">
    <meta property="og:description" content="Získejte cenovou nabídku na míru pro vaše stavební výkresy. Vyplňte jednoduchý formulář a my vám poskytneme nezávaznou nabídku podle vašich potřeb."> -->
    <meta property="og:url" content="https://www.southplan-conphys.cz/teplo">
    <meta property="og:type" content="website">

	<title>Teplo | Southplan</title>
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
	<section class="nahled" <?php if($permission_teplo == "off"){
			echo "style='min-height: 100vh;'";
		} ?>>
		<?= $emailAddSuccess ?>
		<?= $emailAddInPast ?>
		<?= $cookieBar ?>
		<?php if($permission_teplo == "off"): ?>
				<section id='sentSuccess'>
					<div class="wait">
						<div class='success' style="border: none !important;">
							<i class="fa-regular fa-clock fa-2xl" style="color: #24a669; transform: scale(1.5);"></i>
						</div>
						<h3>Zde pro vás připravujeme stránku pro online výpočty prostupu tepla</h3>
					</div>
				</section>
		<?php else: ?>
        <?php include "assets/icons-crossroadTeplo.php"; ?>

		<?php endif ?>
    </section>
</main>
<!-- PATIČKA -->

<?php 
	if(!isLoggedIn()){
		$from = "teplo.php";
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
	
	<script src="javaScript/scriptStatika.js"></script>
</body>
</html>