$.get("http://ajax/phpAJAX/?page=apiGetPersonnes", function success(data) { let parsedData = JSON.parse(data);
    let title = document.querySelector("h1");
    for (let row of parsedData) { console.log(row);
        title.insertAdjacentHTML("afterend", <div id="personne${row.id}"><h2>ID: ${row.id}
        </h2><p>Prenom: ${row.prenom}</p><p>Nom: ${row.nom}</p><p>Age: ${row.age}</p></div>); } })