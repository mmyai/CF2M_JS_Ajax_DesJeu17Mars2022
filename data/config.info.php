<?php

// fichier de configuration


// ce fichier doit être renommé en config.php après l'installation

// MariaDB connexion
define("MDB_HOST","localhost");
define("MDB_PORT",8889);
define("MDB_NAME","js_bdd_exo_ajax_jeu17mars2022");
define("MDB_USER","usercf2m23mars2022");
define("MDB_PWD","mot2dePa70sse");
define("MDB_CHARSET","utf8");

// Règlages d'affichage des news
define("NEWS_HOME_LENGTH", 240); // nombre de caractères du texte sur la page d'accueil
define("NEWS_USER_LENGTH", 140); // nombre de caractères du texte sur la page d'accueil
define("NEWS_BR",true); // si true, retours automatiques à la ligne, si false pas de <br>

// on définit les pages publiques acceptées en variable get dans une constante contenant un tableau (depuis PHP7)
define("VUE", ['homepage','admin','contact','cv','admin','galerie','header','liens','pied_de_page','titre_body','titre_de_page','tutoriels']);
?>
