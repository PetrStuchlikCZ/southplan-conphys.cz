<?php

require "assets/database.php";
require "assets/auth.php";
$email = null;
$password = null;
$connection = connectionDB();
$ok = "";
$wrong_password = "";
$non_existing_email = "";

session_start();
if(isset($_SESSION["is_logged_in"]) and ($_SESSION["is_logged_in"]) === true){
	$userid = $_SESSION["logged_in_user_id"];
	//header -- přesměrování na účet
	header("location: admin/account.php?id=$userid");
}
$cookieBar = "";
if(!cookieBar()){
	//vyskočí na uživatele cookie lišta --> souhlas/nesouhlas se uloží do session cookie_agreement
	// lišta = formulář, odešle se na cookieSetting.php
	$fromCookie = "signIn.php";
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
if ( isset($_GET["emailAdd"]) and ($_GET["emailAdd"]) == "true"){
	$emailAddSuccess = "<a href='signIn.php' id='addedSuccess'>
							<div class='success'>
								<i class='fa-solid fa-check fa-2xl' style='color: #24a669;'></i>
							</div>
							<h3>Úspěšně jste se přihlásily k odběru newsletteru</h3>
							<h4>Věříme že naše články Vám přinesou nový pohled na stavebnictví a novou inspiraci</h4>
						</a>";
}
if ( isset($_GET["emailAdd"]) and ($_GET["emailAdd"]) == "inPast"){
	$emailAddInPast = "<a href='signIn.php' id='addedSuccess'>
							<div class='success'>
								<i class='fa-solid fa-check fa-2xl' style='color: #24a669;'></i>
							</div>
							<h3>Na tento email již newsletter zasíláme</h3>
							<h4>Věříme že naše články Vám přináší nový pohled na stavebnictví a novou inspiraci</h4>
						</a>";
}
if ($_SERVER["REQUEST_METHOD"] === "POST"){

	$email = $_POST["email"];
	$password = $_POST["password"];
	$log_password = $_POST["password"];

	
	$sql = "SELECT * FROM account WHERE  email ='". mysqli_escape_string($connection, $_POST["email"]). "'";

	$result = mysqli_query($connection, $sql);
	
	if ($result === false ){
		echo mysqli_error($connection);
	} else {
		$account = mysqli_fetch_assoc($result);
	};
	if ($account){
		$user_password_database = $account["password"];
		$user_role = $account["role"];
		if( password_verify($password, $user_password_database)){
			$id = $account["id"];
			$user_email = $account["email"];
			session_regenerate_id(true);

			$_SESSION["is_logged_in"] = true;
			$_SESSION["logged_in_user_id"] = $id;
			$_SESSION["user_email"] = $user_email;
			if($user_role == "user"){
				$_SESSION["role"] = $user_role;
				header("location: admin/account.php?id=$id");
			} elseif ( $user_role == "admin"){
				$_SESSION["role"] = $user_role;
				header("location: admin/account.php?id=$id");
			} elseif ( $user_role == "superadmin"){
				$_SESSION["role"] = $user_role;
				header("location: admin/account.php?id=$id");
			}
			

		}else {
			$wrong_password = "<div ><p id='kontrolaHesla'>Špatné heslo</p></div>";
		}
	} else {
		$non_existing_email = "<p id='non_existing_email'>Na tento email není účet založen</p>";
	};
}

?>

<!DOCTYPE html>
<html lang="cs">
<head>
<?php include "assets/analytics.php"; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/stylySignIn.css">
	<link rel="stylesheet" type="text/css" href="css/cookieBar.css">
	<link rel="stylesheet" type="text/css" href="css/stylyEmailFooter.css">
	<link rel="stylesheet" type="text/css" href="css/queries/queriesSignIn.css">
	<script src="https://kit.fontawesome.com/d5a5ebca56.js" crossorigin="anonymous"></script>
	<title id="title">Přihlášení</title>
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
		<section id="nahled">
		<?= $emailAddSuccess ?>
		<?= $emailAddInPast ?>
		<?= $cookieBar ?>
			<div class="přihlášení">
				<h2>Zaměstnanec</h2>
				<form action="signIn.php" method="POST" id="formPrihlasit">
					<input type="email" placeholder="E-mail" name="email" required value="<?= htmlspecialchars($email) ?>">
					<div class="password-Box">
						<input id="password" type="password" placeholder="Heslo" name="password" required value="<?= htmlspecialchars($password) ?>">
						<img src="images/eye-close.png" id="eyeicon">
					</div>
					<input type="submit" id="submit" value="Přihlásit">
				</form>
				<?php
					echo $ok;
					echo $wrong_password;
					echo $non_existing_email;
				?>
			<p class="para-2">Jste zaměstnanec a nemáte účet? Kontaktujte svého administrátora.</p>
			</div>
		</section>
	</main>
<!-- PATIČKA -->		
<?php 
	if(!isLoggedIn()){
		$from = "signIn.php";
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
	
	<script src="javaScript/scriptSignIn.js"></script>
</body>
</html>