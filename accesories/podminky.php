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
	$fromCookie = "accesories/podminky.php";
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
// 	$emailAddSuccess = "<a href='podminky.php' id='addedSuccess'>
// 							<div class='success'>
// 								<i class='fa-solid fa-check fa-2xl' style='color: #24a669;'></i>
// 							</div>
// 							<h3>Úspěšně jste se přihlásily k odběru newsletteru</h3>
// 							<h4>Věříme že naše články Vám přinesou nový pohled na stavebnictví a novou inspiraci</h4>
// 						</a>";
// }
// if ( isset($_GET["emailAdd"]) and ($_GET["emailAdd"]) == "inPast"){
// 	$emailAddInPast = "<a href='podminky.php' id='addedSuccess'>
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
// $provozovatel = $companyTexts["provozovatel"];
// $IC = $companyTexts["IC"];

$email1 = "stuchlik@southplan.cz";
$email2 = "";
$tel1 = "";
$tel2 = "";
$adresa = "";
$provozovatel = "Petr Stuchlík";
$IC = "";



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
	<title>Podmínky</title>
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
		<section id="podminky">
		<p class="nadpisMain">Zásady používání cookies</p>
			<div id="cookies">
				<div class="odstavec">
					<p class="nadpis">Jak cookies pomáhají našemu webu</p>
					<p class="text">Cookies jsou malé textové soubory, které váš prohlížeč ukládá na vašem zařízení, když navštívíte náš web o stavebnictví. Tyto soubory nám pomáhají zlepšovat váš zážitek z používání webu a umožňují nám lépe porozumět tomu, jak návštěvníci s naším obsahem interagují. Díky cookies můžeme analyzovat návštěvnost našich stránek, sledovat, které články jsou nejoblíbenější, a jakým způsobem se návštěvníci na webu pohybují. To nám pomáhá vytvářet lepší a relevantnější obsah, který odpovídá zájmům našich čtenářů.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">Jak náš web cookies využívá</p>
					<p class="text">Na našem webu používáme různé typy cookies, aby byl váš zážitek co nejlepší. Některé cookies jsou nezbytné pro základní fungování webu, například pro zapamatování vašich preferencí (např. jazykové nastavení nebo souhlas s používáním cookies). Další typy cookies nám umožňují analyzovat návštěvnost prostřednictvím anonymních dat, což nám pomáhá optimalizovat rozložení webu a obsah článků. Kromě toho využíváme cookies ke správě možnosti přihlášení k odběru newsletteru, takže vám můžeme zasílat relevantní novinky. Žádné z cookies, které používáme, neobsahují osobní údaje, jako je vaše jméno nebo emailová adresa, pokud nám k tomu nedáte výslovný souhlas.</p>
				</div>
			</div>
				
		<p class="nadpisMain">Podmínky ochrany soukromí</p>
			<div id="privacy">
				<div class="odstavec">
					<p class="text">Vaše soukromí je pro nás důležité. Tento dokument vysvětluje, jak shromažďujeme, používáme a chráníme vaše osobní údaje v souvislosti s používáním tohoto blogu o stavebnictví.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">1. Správce osobních údajů</p>
					<p class="text">Správcem vašich osobních údajů je <?php
						if($provozovatel){
							echo "$provozovatel";
						} else {
							echo "provozovatel webu";
						}
					?> <?php
					if($adresa){
						echo ", se sídlem $adresa";
					} else {
						echo "";
					}
					?><?php
					if($IC){
						echo ", IČO: $IC";
					} else {
						echo "";
					}
					?>, (dále jen "Správce"). V případě jakýchkoli dotazů ohledně ochrany osobních údajů nás můžete kontaktovat na emailu <?php
						if($email1 and !$email2){
							echo "$email1";
						} elseif(!$email1 and $email2){
							echo "$email2";
						} else {
							echo "$email1 nebo $email2";
						}
					?>.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">2. Shromažďované osobní údaje</p>
					<p class="text">Shromažďujeme pouze údaje, které nám poskytnete dobrovolně prostřednictvím formuláře pro nezávaznou poptávku nebo při přihlášení k odběru newsletteru. Shromažďované údaje zahrnují:
<br><br>•  Jméno a příjmení: Abychom vás mohli identifikovat a adekvátně reagovat na vaši poptávku.
<br><br>•  Emailová adresa: Pro zaslání odpovědi na vaši poptávku nebo pro zasílání newsletteru (pokud jste se k němu přihlásili). Emailovou adresu shromažďujeme i v případě, že se přihlásíte pouze k odběru newsletteru a neodešlete nezávaznou poptávku.
<br><br>•  Telefonní číslo: Pro možnost přímého kontaktu v rámci vyřízení poptávky.
<br><br>•  Adresa: Pro účely přesnějšího zpracování vaší poptávky, pokud je relevantní (např. pokud se poptávka týká stavební činnosti na konkrétním místě).
<br><br>Tyto údaje zpracováváme výhradně, pokud odešlete formulář s nezávaznou poptávkou nebo se přihlásíte k odběru newsletteru. Pokud formulář neodešlete nebo se nepřihlásíte k newsletteru, žádné z těchto osobních údajů neshromažďujeme ani neuchováváme.
					</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">3. Účel zpracování osobních údajů</p>
					<p class="text">Osobní údaje, které nám poskytnete, zpracováváme výhradně za následujícími účely:

<br><br>•  Zasílání newsletteru: Pokud se přihlásíte k odběru našeho newsletteru, zpracováváme vaši emailovou adresu, abychom vám mohli zasílat novinky a aktualizace z našeho blogu.
<br><br>•  Vyřizování nezávazné poptávky: Pokud odešlete formulář s nezávaznou poptávkou, zpracováváme vaše jméno, příjmení, emailovou adresu, telefonní číslo a adresu za účelem zpracování a odpovědi na vaši poptávku. Tyto údaje nám umožňují s vámi komunikovat a připravit relevantní nabídku podle vaší žádosti.
<br><br>Vaše údaje nebudou zpracovávány pro žádné jiné účely bez vašeho výslovného souhlasu.
						</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">4. Doba uchovávání údajů</p>
					<p class="text">Vaše osobní údaje budeme uchovávat pouze po dobu, která je nezbytně nutná k dosažení účelů, pro které byly shromážděny.

<br><br>•  Údaje získané prostřednictvím nezávazné poptávky (jméno, příjmení, email, telefonní číslo, adresa) budeme uchovávat po dobu vyřizování vaší poptávky. Po ukončení tohoto procesu budou vaše údaje archivovány pouze v případě, že to bude nutné z právních nebo administrativních důvodů. Pokud další uchování nebude nutné, vaše údaje budou bezpečně vymazány.
<br><br>•  Emailová adresa pro účely zasílání newsletteru bude uchovávána po dobu, po kterou jste přihlášeni k odběru newsletteru. Pokud se rozhodnete z odběru odhlásit, vaše emailová adresa bude bezodkladně smazána z naší databáze.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">5. Zařazení do portfolia</p>
					<p class="text">Projekty budou do našeho portfolia zařazeny pouze na základě předchozího výslovného souhlasu klienta. Bez tohoto souhlasu nebudou žádné informace o projektu, včetně fotografií či jiných detailů, zveřejněny.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">6. Osobní údaje v souvislosti s portfoliem</p>
					<p class="text">V rámci zveřejnění projektů v portfoliu nebudou uvedeny žádné osobní údaje klientů, pokud nám k tomu neudělí výslovný souhlas.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">7. Předávání osobních údajů třetím stranám</p>
					<p class="text">Vaše osobní údaje nebudou prodávány, sdíleny ani předávány třetím stranám, s výjimkou případů, kdy to vyžadují zákony nebo orgány veřejné moci.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">8. Zabezpečení osobních údajů</p>
					<p class="text">Děláme vše pro to, aby vaše údaje byly v bezpečí. Používáme vhodná technická a organizační opatření, aby byly vaše údaje chráněny proti neoprávněnému přístupu, ztrátě nebo zneužití.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">9. Vaše práva</p>
					<p class="text">V souladu s platnými právními předpisy o ochraně osobních údajů máte následující práva:
<br><br>•	Právo na přístup: Máte právo získat informace o tom, jaké údaje o vás zpracováváme.
<br><br>•	Právo na opravu: Pokud jsou vaše údaje nepřesné nebo neúplné, můžete požádat o jejich opravu.
<br><br>•	Právo na výmaz: Můžete požádat o vymazání vašich údajů, pokud již nejsou potřebné pro účely, pro které byly shromažďovány.
<br><br>•	Právo na odvolání souhlasu: Svůj souhlas se zpracováním osobních údajů můžete kdykoliv odvolat, například odhlášením z newsletteru.
</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">10. Cookies</p>
					<p class="text">Tento web může používat cookies k analýze návštěvnosti a vylepšení uživatelského zážitku. Cookies jsou malé textové soubory ukládané ve vašem prohlížeči, které mohou sledovat informace o vašem pohybu na webu. Více informací o používání cookies najdete v samostatném dokumentu Zásady používání cookies.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">11. Změny těchto podmínek</p>
					<p class="text">Vyhrazujeme si právo kdykoli upravit tyto Podmínky ochrany soukromí. O veškerých změnách vás budeme informovat na této stránce, případně e-mailem, pokud budou změny podstatné.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">12. Kontakt</p>
					<p class="text">V případě dotazů ohledně zpracování osobních údajů nás můžete kontaktovat na emailu: <?php
						if($email1 and !$email2){
							echo "$email1";
						} elseif(!$email1 and $email2){
							echo "$email2";
						} else {
							echo "$email1 nebo $email2";
						}
					?>
					.</p>
				</div>
				
			</div>
			<p class="nadpisMain">Zpracování osobních údajů</p>
			<div id="zpracovani">
				<div class="odstavec">
					<p class="text">
						V rámci fungování tohoto blogu o stavebnictví zpracováváme osobní údaje v souladu s nařízením Evropského parlamentu a Rady (EU) 2016/679 (Obecné nařízení o ochraně osobních údajů, tzv. GDPR). Tento dokument vás informuje o tom, jaké osobní údaje zpracováváme, za jakým účelem a jak jsou chráněny.
					</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">1. Správce osobních údajů</p>
					<p class="text">Správcem osobních údajů je <?php
						if($provozovatel){
							echo "$provozovatel";
						} else {
							echo "provozovatel webu";
						}
					?> <?php
					if($adresa){
						echo ", se sídlem $adresa";
					} else {
						echo "";
					}
					?><?php
					if($IC){
						echo ", IČO: $IC";
					} else {
						echo "";
					}
					?>, (dále jen "Správce"). V případě dotazů ohledně ochrany vašich osobních údajů nás můžete kontaktovat na emailu <?php
						if($email1 and !$email2){
							echo "$email1";
						} elseif(!$email1 and $email2){
							echo "$email2";
						} else {
							echo "$email1 nebo $email2";
						}
					?>.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">2. Rozsah a účely zpracování osobních údajů</p>
					<p class="text">Shromažďujeme a zpracováváme osobní údaje, které nám poskytnete dobrovolně prostřednictvím formulářů na našem webu, a to za následujícími účely:

<br><br>•  Jméno a příjmení: Slouží k vaší identifikaci a osobnímu oslovení při vyřizování nezávazné poptávky.
<br><br>•  Emailová adresa: Používáme ji k tomu, abychom vám mohli odpovědět na vaši nezávaznou poptávku a případně zasílat náš newsletter, pokud jste se k jeho odběru přihlásili.
<br><br>•  Telefonní číslo: Slouží k tomu, abychom vás mohli kontaktovat rychle a efektivně v souvislosti s vaší poptávkou.
<br><br>•  Adresa: Používáme ji, pokud je relevantní pro zpracování vaší poptávky (například pokud poptávka souvisí se stavebními nebo lokalizovanými službami).
<br><br>Údaje zpracováváme pouze za účelem:

<br><br>•  Vyřizování nezávazných poptávek: Tyto údaje potřebujeme k tomu, abychom mohli adekvátně zpracovat vaši žádost a poskytnout vám nabídku nebo odpověď podle vaší poptávky.
<br><br>•  Zasílání newsletteru: Pokud se přihlásíte k odběru newsletteru, zpracováváme vaši emailovou adresu, abychom vám mohli zasílat novinky a informace z našeho blogu.
<br><br>Vaše údaje nejsou využívány pro jiné účely bez vašeho výslovného souhlasu a jsou zpracovávány pouze v rozsahu, který je nezbytný pro dosažení výše uvedených účelů.</p>
				</div>
				<div class="odstavec">
				<div class="odstavec">
					<p class="nadpis">3. Souhlas se zveřejněním projektu</p>
					<p class="text">Do našeho portfolia zařazujeme pouze projekty, ke kterým nám klient poskytl výslovný souhlas s jejich zveřejněním. Tento souhlas zahrnuje použití fotografií, popisu projektu a dalších souvisejících informací.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">4. Zachování důvěrnosti</p>
					<p class="text">Pokud klient neposkytne souhlas se zveřejněním projektu v portfoliu, veškeré informace o projektu zůstanou důvěrné a nebudou zveřejněny ani použity k jiným účelům bez souhlasu klienta.</p>
				</div>
					<p class="nadpis">5. Právní základ zpracování</p>
					<p class="text">Osobní údaje, které zpracováváme, jsou zpracovávány na základě následujících právních titulů:

<br><br>•  Souhlas se zpracováním osobních údajů: Zpracování vaší emailové adresy pro zasílání newsletteru probíhá pouze na základě vašeho výslovného souhlasu, který můžete kdykoliv odvolat. Přihlášení k odběru newsletteru je dobrovolné a emailovou adresu zpracováváme pouze pro tento účel, dokud souhlas neodvoláte. Tento souhlas můžete kdykoliv odvolat kliknutím na odkaz pro odhlášení v kterémkoli zaslaném emailu nebo kontaktováním nás na <?php
						if($email1 and !$email2){
							echo "$email1";
						} elseif(!$email1 and $email2){
							echo "$email2";
						} else {
							echo "$email1 nebo $email2";
						}
					?>.

<br><br>•  Plnění smlouvy nebo předsmluvní opatření: Osobní údaje, které nám poskytnete prostřednictvím formuláře pro nezávaznou poptávku (jméno, příjmení, email, telefonní číslo a adresa), jsou zpracovávány na základě vašeho zájmu o naše služby. Zpracováváme je pro účely odpovědi na vaši poptávku a poskytnutí potřebných informací nebo nabídky. Tímto plníme vaše předsmluvní požadavky, které jsou nezbytné pro případné budoucí uzavření smlouvy.

<br><br>Všechny údaje zpracováváme výhradně na základě platného právního důvodu v souladu s obecným nařízením o ochraně osobních údajů (GDPR). .
</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">6. Doba uchování osobních údajů</p>
					<p class="text">Vaše osobní údaje budeme uchovávat pouze po dobu, která je nezbytně nutná k dosažení účelů, pro které byly shromážděny.

<br><br>•  Údaje získané prostřednictvím nezávazné poptávky (jméno, příjmení, email, telefonní číslo, adresa) budeme uchovávat po dobu vyřizování vaší poptávky. Po ukončení tohoto procesu budou vaše údaje archivovány pouze v případě, že to bude nutné z právních nebo administrativních důvodů. Pokud další uchování nebude nutné, vaše údaje budou bezpečně vymazány.
<br><br>•  Emailová adresa pro účely zasílání newsletteru bude uchovávána po dobu, po kterou jste přihlášeni k odběru newsletteru. Pokud se rozhodnete z odběru odhlásit, vaše emailová adresa bude bezodkladně smazána z naší databáze.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">7. Předávání osobních údajů třetím stranám</p>
					<p class="text">Vaše osobní údaje nejsou poskytovány třetím stranám, s výjimkou případů, kdy je to nezbytné pro plnění právních povinností, nebo pokud jste k tomu dali výslovný souhlas. Zajišťujeme, že všichni naši partneři zpracovávají osobní údaje v souladu s právními předpisy a zabezpečují jejich ochranu.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">8. Zabezpečení osobních údajů</p>
					<p class="text">K ochraně vašich osobních údajů používáme moderní technická a organizační opatření, která mají za cíl zabránit neoprávněnému přístupu, ztrátě nebo zneužití vašich dat. Vaše údaje jsou uloženy v zabezpečených databázích s omezeným přístupem.</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">9. Vaše práva</p>
					<p class="text">V souladu s GDPR máte následující práva ve vztahu ke svým osobním údajům:
<br><br>•	Právo na přístup: Máte právo vědět, jaké údaje o vás zpracováváme.
<br><br>•	Právo na opravu: Pokud jsou vaše údaje nesprávné, máte právo požádat o jejich opravu.
<br><br>•	Právo na výmaz (právo být zapomenut): Můžete požádat o vymazání svých údajů, pokud již nejsou potřebné pro účel, za kterým byly shromážděny.
<br><br>•	Právo na omezení zpracování: Můžete požádat o omezení zpracování svých údajů v určitých situacích.
<br><br>•	Právo na přenositelnost údajů: Máte právo získat své osobní údaje v strukturovaném, běžně používaném a strojově čitelném formátu.
<br><br>•	Právo vznést námitku: Máte právo vznést námitku proti zpracování svých osobních údajů.
<br><br>•	Právo na odvolání souhlasu: Kdykoliv můžete odvolat svůj souhlas se zpracováním osobních údajů pro účely zasílání newsletteru.
Pokud si přejete uplatnit jakékoliv z těchto práv, kontaktujte nás na emailové adrese <?php
						if($email1 and !$email2){
							echo "$email1";
						} elseif(!$email1 and $email2){
							echo "$email2";
						} else {
							echo "$email1 nebo $email2";
						}
					?>.
</p>
				</div>
				<div class="odstavec">
					<p class="nadpis">10. Podání stížnosti</p>
					<p class="text">Pokud se domníváte, že zpracování vašich osobních údajů porušuje právní předpisy, máte právo podat stížnost u Úřadu pro ochranu osobních údajů České republiky (www.uoou.cz).</p>
				</div>
				
			
			</div>
		</section>
        </section>
    </main>
<!-- PATIČKA -->

<?php 
	if(!isLoggedIn()){
		$from = "accesories/podminky.php";
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