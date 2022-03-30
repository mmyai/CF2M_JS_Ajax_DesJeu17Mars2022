<?php
//Cette ligne permet d'accepter de recevoir des donné&es
//C'est le principe de l'API :  se connecter, prendre les données et les afficher.
header("Acces-Control-Allow-Origin: *");

require_once "config_bat.php"

try {
    $db = new PDO($dbh = new PDO('mysql:host=localhost;dbname= js_bdd_exo_ajax_jeu17mars2022'; port= ;charset=utf8"", $user, $pass);

} catch (Exception *e) {
    die($e->getMessage());

}

if (isset($_GETå['page'])) {
    switch ($page) {
        default: include_one "apiGetPersonnes.php";

    }


}
switch () {




}

?>


//Connexion initialement définie puis supprimée au profi d'une connexion PDO - require once "config_bat.php";
//TODO 2 - ven 18 Mars 2022  - Ajouter un fichier "config" pour avoir des informations de connexion à la BDD - DONE Mer 23 Mars 2022



//CONNECTION PHP PDO A LA BDD
$host = "localhost";
$user = "usercf2m23mars2022";
$pass = "mot2dePa70sse";
$dbName = "js_bdd_exo_ajax_jeu17mars2022";

$dbh = new PDO('mysql:host=localhost;dbname= js_bdd_exo_ajax_jeu17mars2022', $user, $pass);


// CONSTANTES AVEC PARAMETRES DE CONNEXION PDO
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'js_bdd_exo_ajax_jeu17mars2022');
define('DB_PORT', 8889);
define('DB_CHARSET', 'UTF8');
define('DB_LOGIN', 'root');
define('DB_PWD', 'root');

// Admin
define('DB_USER', 'usercf2m23mars2022');
define('DB_PASS', 'mot2dePa70sse);


//TEST DE LA CONNEXION PDO

try
{
    $sql = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

//AFFICHAGE DES VALEURS CONTENUES DANS LA BASE DE DONNES
CREATE VIEW js_bdd_exo_ajax_jeu17mars2022 AS affichage
SELECT
  nom.affichage,
  prenom.affichage,
  telephone.affichage
  adresse.affichage
FROM Personnages





/*
$sql = "
    SELECT
        Language, Percentage  
    FROM countrylanguage
    WHERE CountryCode = 'RUS'
    ORDER BY Percentage DESC";

foreach ($dbh->query($sql) as $row) {
    echo $row[0] . ": " . $row[1], "\n";
}
$dbh = null; */



// SQL query execution
/*$res = $dbh->query("
    SELECT
        Language, Percentage  
    FROM countrylanguage
    WHERE CountryCode = 'RUS'
    ORDER BY Percentage DESC");*/

/* Ger first row
$row = $res->fetch();
echo $row['Language'] . ": " . $row['Percentage'], "\n";*/

// Get all rows
/*foreach ($res as $row) {
    echo $row['Language'] . ": " . $row['Percentage'], "\n";
}

$dbh = null;
echo '{"nom":"Smith","prenom":"John","age":42,"pays":"Ukraine"}'*/






?>



