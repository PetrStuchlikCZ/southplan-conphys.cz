<?php
 //require "assets/functionPermission.php";
// $settingNumber = 1;
// $permission = getPermission($connection, $settingNumber);
$permission_geodezie = "on";
$permission_statika = "on";
$permission_teplo = "on";
$permission_beton = "on";

if($permission_geodezie == "off"){
	$li_geodezie = "";
} elseif ($permission_geodezie == "on"){
	$li_geodezie = "<li><a href='../geodezie.php' class='link' id='geodezie'><strong>Geodézie</strong></a></li>";
}
if($permission_statika == "off"){
	$li_statika = "";
} elseif ($permission_statika == "on"){
	$li_statika = "<li><a href='../statika.php' class='link' id='statika'><strong>Statika</strong></a></li>";
}
if($permission_teplo == "off"){
	$li_teplo = "";
} elseif ($permission_teplo == "on"){
	$li_teplo = "<li><a href='../teplo.php' class='link' id='teplo'><strong>Teplo</strong></a></li>";
}
if($permission_beton == "off"){
	$li_beton = "";
} elseif ($permission_beton == "on"){
	$li_beton = "<li><a href='../beton.php' class='link' id='beton'><strong>Beton</strong></a></li>";
}

?>
<ul id="seznam">

 	<?= $li_geodezie ?>
	<?= $li_statika ?>
	<?= $li_teplo ?>
	<?= $li_beton ?>
	
	
</ul>