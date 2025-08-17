<?php


/**
 * 
 * Ověřuje zda je uživatel přihlášen nebo ne
 * 
 * @return boolean True pokud je přihlášen, jinak false
 * 
 */

 function isLoggedIn(){
    return isset($_SESSION["is_logged_in"]) and $_SESSION["is_logged_in"];
 }

 /**
 * 
 * Ověřuje zda  uživatel odklikl cookie lištu (nezáleží na odpovědi)
 * 
 * @return boolean True pokud ji odklikl , jinak false
 * 
 */

 function cookieBar(){
   return isset($_SESSION["cookie_agreement"]);
}

 /**
 * 
 * Ověřuje zda  uživatel odsouhlasil cookies
 * 
 * @return boolean True pokud ano , jinak false
 * 
 */

 function cookieAgreement(){
   return isset($_SESSION["cookie_agreement"]) and $_SESSION["cookie_agreement"];
}


/**
 * 
 * Ověřuje zda je uživatel přihlášen jako admin nebo superadmin
 * 
 * @return boolean True pokud je přihlášen jako admin, jinak false
 * 
 */

 function isAdmin(){
   return isset($_SESSION["role"]) and $_SESSION["role"] == "admin" or $_SESSION["role"] == "superadmin" ;
}
/**
 * 
 * Ověřuje zda je uživatel přihlášen pouze jako admin
 * 
 * @return boolean True pokud je přihlášen jako admin, jinak false
 * 
 */

 function isOnlyAdmin(){
   return isset($_SESSION["role"]) and $_SESSION["role"] == "admin" ;
}
/**
 * 
 * Ověřuje zda je uživatel přihlášen pouze jako superadmin
 * 
 * @return boolean True pokud je přihlášen jako admin, jinak false
 * 
 */

 function isOnlySuperAdmin(){
   return isset($_SESSION["role"]) and $_SESSION["role"] == "superadmin" ;
}