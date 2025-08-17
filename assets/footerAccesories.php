<footer>
		<nav class="dolni">
		<!-- <?= "<form action='addEmail.php?from=$from' method='POST' id='formAddEmailMobil' enctype='multipart/form-data'>" ?>
				<p id="addEmailP">Přejete si odebírat newsletter?</p>
				<div class="tooltip-container">
					<input type="email" id="inputEmail" placeholder="E-mail" name="email">
					
				</div>
				<p id="mobilQuestionText">Odesláním souhlasíte se zpracováním osobních údajů. Z odběru se můžete kdykoliv odhlásit.</p>
				<input type="submit" id="submitEmail" value="Odeslat">
			</form> -->
			<ul>
				<li id="socialNetworks">
					<?php 

					// $settingNumber = 1;
					// $company = getCompany($connection, $settingNumber);
					// $company_facebook = $company["facebook"];
					$company_facebook = "";
					if($company_facebook == ""){
						echo "";
					} else {
						echo "<a href='$company_facebook'><i class='fa-brands fa-facebook fa-2xl' id='firstLink' style='color: #ffffff;'></i></a>";
					};
					//$company_instagram = $company["instagram"];
					$company_instagram = "";
						if($company_instagram == ""){
							echo "";
						} else {
							echo "<a href='$company_instagram'><i class='fa-brands fa-instagram fa-2xl' style='color: #ffffff;'></i></a>";
						};
					//$company_twitter = $company["twitter"];
					$company_twitter = "";
						if($company_twitter == ""){
							echo "";
						} else {
							echo "<a href='$company_twitter'><i class='fa-brands fa-x-twitter fa-2xl' style='color: #ffffff;'></i></a>";
						};
					//$company_linkedin = $company["linkedin"];
					$company_linkedin = "";
						if($company_linkedin == ""){
							echo "";
						} else {
							echo "<a href='$company_linkedin'><i class='fa-brands fa-linkedin fa-2xl'  style='color: #ffffff;'></i></a>";
						};
					//$company_youtube = $company["youtube"];
					$company_youtube = "";
						if($company_youtube == ""){
							echo "";
						} else {
							echo "<a href='$company_youtube'><i class='fa-brands fa-youtube fa-2xl'  style='color: #ffffff;'></i></a>";
						};
					//$company_copyright = $company["copyright"];
					$company_copyright = "2025 Petr Stuchlík";
					
					?>
				</li>
				<?php
				$permission_web = "on";
				$permission_postup = "off";
				$permission_cenik = "off";
				$permission_kontakt = "on";
				$permission_oNas = "off";
				$permission_podminky = "on";
				$permission_zamestnanec = "off";

				if($permission_web == "off"){
					$li_web = "";
				} elseif ($permission_web == "on"){
					$li_web = "<li><a href='https://southplan.cz/'>Southplan.cz</a></li>";
				}
				if($permission_postup == "off"){
					$li_postup = "";
				} elseif ($permission_postup == "on"){
					$li_postup = "<li><a href='howTo.php'>Postup zadání nezávazné poptávky</a></li>";
				}
				if($permission_cenik == "off"){
					$li_cenik = "";
				} elseif ($permission_cenik == "on"){
					$li_cenik = "<li><a href='cenik.php'>Ceník</a></li>";
				}
				if($permission_kontakt == "off"){
					$li_kontakt = "";
				} elseif ($permission_kontakt == "on"){
					$li_kontakt = "<li><a href='kontakt.php'>Kontakt</a></li>";
				}
				if($permission_oNas == "off"){
					$li_oNas = "";
				} elseif ($permission_oNas == "on"){
					$li_oNas = "<li><a href='oNas.php'>O nás</a></li>";
				}
				if($permission_podminky == "off"){
					$li_podminky = "";
				} elseif ($permission_podminky == "on"){
					$li_podminky = "<li><a href='podminky.php'>Podmínky</a></li>";
				}
				if($permission_zamestnanec == "off"){
					$li_zamestnanec = "";
				} elseif ($permission_zamestnanec == "on"){
					$li_zamestnanec = "<li><a href='../signIn.php'>Zaměstnanec</a></li>";
				}
				?>
				<?= $li_web ?>
				<?= $li_postup ?>
				<?= $li_cenik ?>
				<?= $li_kontakt ?>
				<?= $li_oNas ?>
				<?= $li_podminky ?>
				<?= $li_zamestnanec ?>
				<div class="copy"><li>&copy;  <?=$company_copyright ?></li></div>
			</ul>
			<!-- <?= "<form action='addEmail.php?from=$from' method='POST' id='formAddEmail' enctype='multipart/form-data'>" ?>
				<p id="addEmailP">Přejete si odebírat newsletter?</p>
				<div class="tooltip-container">
					<input type="email" id="inputEmail" placeholder="E-mail" name="email">
					<span class="question-mark" id="question-mark">?</span>
				</div>
				
				<input type="submit" id="submitEmail" value="Odeslat">
				<div id="questionText"><p>Odesláním souhlasíte se zpracováním osobních údajů. Z odběru se můžete kdykoliv odhlásit.</p></div>
			</form> -->

		</nav>
</footer>