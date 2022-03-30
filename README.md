# CF2M_JS_Ajax_DesJeu17Mars2022

Etapes :
1/ Afficher les données sur la page Php



Une fois que la page PHP affiche soit toutes les entrées soit une entrée en particulier grâce à l'index "id" de $_GET, créez deux fonctions en Javascript qui, une va permettre de récupérer toutes les entrées et l'autre qui va récupérer seulement une entrée.
Retransformer les données reçues en JSON en structures de données avant de les utiliser


$.get("http://ajax/phpAJAX/?page=apiGetPersonnes", function success(data) {
let parsedData = JSON.parse(data);
let title = document.querySelector("h1");
for (let row of parsedData) {
console.log(row);
title.insertAdjacentHTML("afterend", `<div id="personne${row.id}"><h2>ID: ${row.id}</h2><p>Prenom: ${row.prenom}</p><p>Nom: ${row.nom}</p><p>Age: ${row.age}</p></div>`);
}
})


Préparez la partie POST en php en créant dans le modelePersonnes.php une fonction pour insérer une personne
Ajouter le code nécessaire afin de vérifier que toutes les données soient présentes et valides avant d'insérer
Les données doivent se trouver dans la super global POST


Une fois que la page PHP affiche soit toutes les entrées soit une entrée en particulier grâce à l'index "id" de $_GET, créez deux fonctions en Javascript qui, une va permettre de récupérer toutes les entrées et l'autre qui va récupérer seulement une entrée.
Retransformer les données reçues en JSON en structures de données avant de les utiliser



Créez ensuite deux boutons, un qui va récupérer toutes les entrées pour les afficher et un autre qui récupéra la valeur d'un input qui sera un chiffre servant d'id
Les données devront être affichées sur la page et le bouton avec un id spécifique devra rajouter une entrée à chaque appui

JSON.parse pour transformer le JSON en structure de données à nouveau en JS




Préparez la partie POST en php en créant dans le modelePersonnes.php une fonction pour insérer une personne
Ajouter le code nécessaire afin de vérifier que toutes les données soient présentes et valides avant d'insérer
Les données doivent se trouver dans la super global POST
