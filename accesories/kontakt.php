<?php

require "../assets/auth.php";
// require "../assets/database.php";
// require "../assets/findDemand.php";
// $connection = connectionDB();
session_start();

if(isset($_SESSION["is_logged_in"]) and ($_SESSION["is_logged_in"]) === true){
	$userid = $_SESSION["logged_in_user_id"];
}
$cookieBar = "";
if(!cookieBar()){
	//vyskočí na uživatele cookie lišta --> souhlas/nesouhlas se uloží do session cookie_agreement
	// lišta = formulář, odešle se na cookieSetting.php
	$fromCookie = "accesories/kontakt.php";
	$cookieBar = "<div id='cookieConsent' >
						<p>Používáme <a href='podminky.php'>cookies</a> pro zlepšení vašeho zážitku. Souhlasíte? Bez souhlasu však může dojít k omezení některých funkcí.</p>
						<form action='../cookieSetting.php' method='POST' >
							<input type='text' style='display: none;' name='from' value='$fromCookie'>
							<button type='submit' id='cookieAccept' name='accept_cookies' >Souhlasím</button>
							<button type='submit' id='cookieDecline' name='decline_cookies' >Nesouhlasím</button>
						</form>
					</div>";
};
$emailAddSuccess = "";
$emailAddInPast = "";
// if ( isset($_GET["emailAdd"]) and ($_GET["emailAdd"]) == "true"){
// 	$emailAddSuccess = "<a href='kontakt.php' id='addedSuccess'>
// 							<div class='success'>
// 								<i class='fa-solid fa-check fa-2xl' style='color: #24a669;'></i>
// 							</div>
// 							<h3>Úspěšně jste se přihlásily k odběru newsletteru</h3>
// 							<h4>Věříme že naše články Vám přinesou nový pohled na stavebnictví a novou inspiraci</h4>
// 						</a>";
// }
// if ( isset($_GET["emailAdd"]) and ($_GET["emailAdd"]) == "inPast"){
// 	$emailAddInPast = "<a href='kontakt.php' id='addedSuccess'>
// 							<div class='success'>
// 								<i class='fa-solid fa-check fa-2xl' style='color: #24a669;'></i>
// 							</div>
// 							<h3>Na tento email již newsletter zasíláme</h3>
// 							<h4>Věříme že naše články Vám přináší nový pohled na stavebnictví a novou inspiraci</h4>
// 						</a>";
// }
// $settingNumber = 1;
// $companyTexts = getCompanySetToNewsletter($connection, $settingNumber);
// $email1 = $companyTexts["emailKontakt1"];
// $email2 = $companyTexts["emailKontakt2"];
// $tel1 = $companyTexts["telKontakt1"];
// $tel2 = $companyTexts["telKontakt2"];
// $adresa = $companyTexts["adresaKontakt"];

$email1 = "stuchlik@southplan.cz";
$tel1 = "";
$email2 = "";
$tel2 = "";
$adresa = "";

?>
<!DOCTYPE html>
<html lang="cs">
<head>
<?php include "../assets/analytics.php"; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image" href="../images/favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/stylyAccesories.css">
	<link rel="stylesheet" type="text/css" href="../css/cookieBar.css">
	<link rel="stylesheet" type="text/css" href="../css/stylyEmailFooter.css">
	<link rel="stylesheet" type="text/css" href="../css/queries/queriesAccesories.css">
    <script src="https://kit.fontawesome.com/d5a5ebca56.js" crossorigin="anonymous"></script>
	<title>Kontakt</title>
</head>
<body>
<!-- HLAVIČKA -->
    <header>
		<nav class="horni">
				<div class="logo"><a href="../index.php"><img src="../images\logo_1920px.png" alt="logo Southplan"></a></div>
				<?php include "../assets/menuAccesories.php"; ?>
				<?php include "../assets/mobilMenuAccesories.php"; ?>
				
		</nav>
    </header>
<!-- OBSAH -->
    <main> 
	    <section class="nahled">
		<?= $emailAddSuccess ?>
		<?= $emailAddInPast ?>
		<?= $cookieBar ?>
		<section id="postup">
		<h2>Kontakt</h2>
			<?php 
				if($email1){
					echo "<div class='email'>
						<p>E-mail: </p>
						<p><strong>$email1</strong></p>
					</div>";
				}
				if($email2){
					echo "<div class='email'>
						<p>E-mail: </p>
						<p><strong>$email2</strong></p>
					</div>";
				}
				if($tel1){
					echo "<div class='email'>
						<p>Telefon: </p>
						<p><strong>+420 $tel1</strong></p>
					</div>";
				}
				if($tel2){
					echo "<div class='email'>
						<p>Telefon: </p>
						<p><strong>+420 $tel2</strong></p>
					</div>";
				}
				if($adresa){
					echo "<div class='email'>
						<p>Adresa: </p>
						<p><strong>$adresa</strong></p>
					</div>";
				}
			?>
		</section>
        </section>
    </main>
<!-- PATIČKA -->

<?php 
	if(!isLoggedIn()){
		$from = "accesories/kontakt.php";
		include "../assets/footerAccesories.php";
	} else {
		echo "<footer>
			<nav class='dolni'>
				<ul>
					<li><a href='../accesories/howTo.php'>Postup zadání poptávky</a></li>
					<li><a href='../accesories/cenik.php'>Ceník</a></li>
					<li><a href='../accesories/kontakt.php'>Kontakt</a></li>
					<li><a href='../accesories/oNas.php'>O nás</a></li>
					<li><a href='../accesories/podminky.php'>Podmínky</a></li>
					<li><a href='../admin/account.php?id=$userid'>Zaměstnanec</a></li>
					<div class='copy'><li>&copy;</li></div>
				</ul>
			</nav>
		</footer>";
	}
	
	 ?>
	
	<script src="../javaScript/scriptAccesories.js"></script>
</body>
</html>