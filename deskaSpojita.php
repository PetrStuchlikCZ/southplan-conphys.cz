<?php

require "assets/auth.php";

session_start();


$cookieBar = "";
if(!cookieBar()){
	//vyskočí na uživatele cookie lišta --> souhlas/nesouhlas se uloží do session cookie_agreement
	// lišta = formulář, odešle se na cookieSetting.php
	$fromCookie = "deskaSpojita.php";
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


$permission_beton = "on";
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
    <link rel="stylesheet" type="text/css" href="css/stylyBeton.css">
	<link rel="stylesheet" type="text/css" href="css/stylyStatika.css">
    <link rel="stylesheet" type="text/css" href="css/cookieBar.css">
	<link rel="stylesheet" type="text/css" href="css/stylyEmailFooter.css">
	<link rel="stylesheet" type="text/css" href="css/queries/queriesGeodezie.css">
	<link rel="canonical" href="https://www.southplan-conphys.cz/beton">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
    <script src="https://kit.fontawesome.com/d5a5ebca56.js" crossorigin="anonymous"></script>

	<!-- <meta property="og:title" content="Podání nezávazné poptávky na stavební výkresy | Southplan">
    <meta property="og:description" content="Získejte cenovou nabídku na míru pro vaše stavební výkresy. Vyplňte jednoduchý formulář a my vám poskytneme nezávaznou nabídku podle vašich potřeb."> -->
    <meta property="og:url" content="https://www.southplan-conphys.cz/beton">
    <meta property="og:type" content="website">

	<title>Beton | Southplan</title>
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
	<section class="nahled" <?php if($permission_beton == "off"){
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
						<h3>Zde pro vás připravujeme stránku pro online návrh betonových prvků - spojité desky</h3>
					</div>
				</section>
		<?php else: ?>
            <section class="formBeton">
                <form class="zadaniTramu" id="deskaSpojita">
                        <div id="AB">
                            <div class="vstup">
                            <div id="sirkaVyska">
                                    <div class="inputSVk">
                                        <label for="pocetPoli">Počet polí desky</label><br>
                                        <input type="number" placeholder="" id="pocetPoli" name="pocetPoli" value="" required>
                                    </div>
                                </div>
                                <div id="sirkaVyska">
                                    <div class="inputSVk">
                                        <label for="rozpetiL">Rozpětí pole L₁ [m]</label><br>
                                        <input type="number" placeholder="" id="rozpetiL" name="rozpetiL" value="" required>
                                    </div>
                                </div>
                                <h3>Návrhové zatížení <div class="fontsize18">[kN/m²]</div></h3>
                                <div id="sirkaVyska">
                                    <div class="inputPas">
                                        <label for="stale">Stálé v poli</label><br>
                                        <input type="number" placeholder="" id="stale" name="stale" value="" required>
                                    </div>
                                    <div class="inputPas">
                                        <label for="promenne">Proměnné</label><br>
                                        <input type="number" placeholder="" id="promenne" name="promenne" value="" required>
                                    </div>
                                </div>
                            </div>
                            <!-- tady bude obrazek -->
                            <div class="ilustrace">
                                <img id="imgVrstevnice" src="" alt="Obrázek betonové spojité desky">
                            </div>
                        </div>
                        <div class="vysledky">
                            <h3><strong>Geometrie</strong></h3>
                            <h2 id="rozpetiVyska">Rozpětí výšky desky</h2>
                            <div id="sirkaVyska">
                            <div class="inputSV">
                                        <label for="vyskaH">Výška h</label><br>
                                        <input type="number" placeholder="" id="vyskaH" name="vyskaH" value="" required>
                                    </div>
                            </div>
                            <h3><strong>Maximální vniřní síly</strong></h3>
                            <div id="sirkaVyska">
                                    <div class="inputMax">
                                        <label for="M">Moment v poli</label><br>
                                        <input type="number" placeholder="" id="M" name="M" value="" required>
                                    </div>
                                    <div class="inputMax">
                                        <label for="Mp">Moment nad vnější podporou</label><br>
                                        <input type="number" placeholder="" id="Mp" name="Mp" value="" required>
                                    </div>
                                    <div class="inputMax">
                                        <label for="Mpv">Moment nad vnitřní podporou</label><br>
                                        <input type="number" placeholder="" id="Mpv" name="Mpv" value="" required>
                                    </div>
                                    <div class="inputMax">
                                        <label for="V">Posouvajicí síla</label><br>
                                        <input type="number" placeholder="" id="V" name="V" value="" required>
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
		$from = "deskaSpojita.php";
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
	
	<script src="javaScript/scriptTram.js"></script>
</body>
</html>