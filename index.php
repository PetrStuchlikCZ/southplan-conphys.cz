<?php
require "assets/auth.php";
session_start();

if(isset($_SESSION["is_logged_in"]) and ($_SESSION["is_logged_in"]) === true){
$userid = $_SESSION["logged_in_user_id"];
}
$cookieBar = "";
if(!cookieBar()){
	//vyskočí na uživatele cookie lišta --> souhlas/nesouhlas se uloží do session cookie_agreement
	// lišta = formulář, odešle se na cookieSetting.php
	$fromCookie = "index.php";
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

// $settingNumber = 1;
// $indexTexts = getCompanySetToNewsletter($connection, $settingNumber);
$slogan = "Ahoj";
$nadpis1 = "";
$text1 = "";
$nadpis2 = "";
$text2 = "";
?>

<!DOCTYPE html>
<html lang="cs">
<head>
	<?php include "assets/analytics.php"; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<link rel="icon" type="image" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/index_styly.css">
	<link rel="stylesheet" type="text/css" href="css/cookieBar.css">
	<link rel="stylesheet" type="text/css" href="css/stylyEmailFooter.css">
	<link rel="stylesheet" type="text/css" href="css/queries/queriesIndex.css">
	<!-- <link rel="canonical" href="https://www.southplan-conphys.cz/"> -->
	<script src="https://kit.fontawesome.com/d5a5ebca56.js" crossorigin="anonymous"></script>

	<!-- <meta property="og:title" content="Southplan - Stavební aktuality a výkresy stávajících stavů">
    <meta property="og:description" content="Získejte aktuální informace o stavebnictví a přečtěte si o našich nejnovějších projektech.">
    <meta property="og:url" content="https://www.southplan-conphys.cz/">
    <meta property="og:type" content="website"> -->

	<title>Stavební fyzika  | Southplan</title>
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
	<section class="nahled">
			<div class="text">
				<img src="images/logo_1920px.png" alt="logo Southplan">
				<h3>Stavební fyzika</h3>
			</div>

			 <?= $emailAddSuccess ?>
			<?= $emailAddInPast ?>
			<?= $cookieBar ?>

			<?php 
			if(!$nadpis1 and !$text1){
				echo "";
			} elseif(!$nadpis1 and $text1){
				echo "<section id='textCustomer'>
				<div class='textObsah'>
					<p>$text1</p>
				</div>
			</section>";
			} elseif($nadpis1 and !$text1){
				echo "<section id='textCustomer'>
				<div class='nadpisText'>
					<h3>$nadpis1</h3>
				</div>
			</section>";
			} else {
				echo "<section id='textCustomer'>
				<div class='nadpisText'>
					<h3>$nadpis1</h3>
				</div>
				<div class='textObsah'>
					<p>$text1</p>
				</div>
			</section>";
			}
			?>
			<?php 
			if(!$nadpis2 and !$text2){
				echo "";
			} elseif(!$nadpis2 and $text2){
				echo "<section id='textManager'>
				<div class='textObsah'>
					<p>$text2</p>
				</div>
			</section>";
			} elseif($nadpis2 and !$text2){
				echo "<section id='textManager'>
				<div class='nadpisText'>
					<h3>$nadpis2</h3>
				</div>
			</section>";
			} else {
				echo "<section id='textManager'>
				<div class='nadpisText'>
					<h3>$nadpis2</h3>
				</div>
				<div class='textObsah'>
					<p>$text2</p>
				</div>
			</section>";
			}
			?>
	</section>
    </main>
    <!-- PATIČKA -->	
 	<?php 
	if(!isLoggedIn()){
		$from = "index.php";
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

    <script src="javaScript/scriptIndex.js"></script>
</body>
</html>