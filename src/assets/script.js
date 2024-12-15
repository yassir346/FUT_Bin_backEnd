// générer les données à travers fichier json
async function fetchPlayers() {
  let dataFromJson = await fetch("../players.json");
  let json = await dataFromJson.json();
  let players = json.players;

  displayData(players);
}

// fetch("../players.json")
// .then((response) => response.json())
// .then(item => {
//   console.log("item")
// }) 
// .catch()

fetchPlayers(); //Appeller la fonction.

// la fonction de l'implémentation des données dans l'HTML
const playersContainer = document.getElementById("players-container");

function displayData(players) {
  players.forEach((player) => {
    const player_card = document.createElement("div");
    player_card.classList.add("player-card");
    player_card.innerHTML = `
      <div class="photo-name">
      <img src="${player.photo}"/>
      <img src="${player.flag}"/>
      <img src="${player.logo}"/>
      <p>${player.name}</p>
      <p>${player.nationality}</p>
      <p>${player.club}</p>
      </div>
      <p id="rating-number">Rating : ${player.rating}</p>
      <div class="rating-numbers">
      <p>PAC ${player.pace}</p>
      <p>SHO ${player.shooting}</p>
      <p>PAS ${player.passing}</p>
      <p>DRI ${player.dribbling}</p>
      <p>DEF ${player.defending}</p>
      <p>PHY ${player.physical}</p>
      </div>
      `;
    playersContainer.appendChild(player_card);
  });
}

// const playerCards = document.querySelectorAll('.playerCard');

// playerCards.forEach(element => {

//   element.addEventListener("click", (e) => {
//     console.log(e.target.parentElement.id);

//     })
// });

let players_values = []; //tableau des joueurs ajoutés par formulaire.

//l'appel des valeurs de l'input du html :
const add_player_button = document.getElementById("add_player_button");
const added_players_container = document.getElementById(
  "added_players_container"
);

const player_name = document.getElementById("name");
const photo_joueur = document.getElementById("photo_joueur");
const position = document.getElementById("position");
const nationalité = document.getElementById("nationalité");
const photo_flag = document.getElementById("photo_flag");
const club = document.getElementById("club");
const pace = document.getElementById("pace");
const shooting = document.getElementById("shooting");
const passing = document.getElementById("passing");
const dribbling = document.getElementById("dribbling");
const defending = document.getElementById("defending");
const physical = document.getElementById("physical");

// Evenement du boutton de submission des données du formulaire :
add_player_button.addEventListener("click", function () {

  let oneplayer = {
    name: player_name.value,
    photo: photo_joueur.value,
    position: position.value,
    nationalité: nationalité.value,
    photo_flag: photo_flag.value,
    club: club.value,
    pace: pace.value,
    shooting: shooting.value,
    passing: passing.value,
    dribbling: dribbling.value,
    defending: defending.value,
    physical: physical.value,
  };

    players_values.push(oneplayer);
    callPlayers();
  
});

function callPlayers() {
  console.log(added_players_container);

  added_players_container.innerHTML=` `;

  players_values.forEach((element) => {
    const added_players_cards = document.createElement("div");
    added_players_cards.classList.add("added_players_cards");
    console.log(element);

    added_players_cards.innerHTML = `
     <div class="">
       <p>${element.name}"</p>
       <img src="${element.photo}"/>
       <p>${element.position}</p>
       <p>${element.nationalité}</p>
       <img src"${element.photo_flag}"</> 
       </div>
       <div class="added-rating-numbers">
       <p>PAC ${element.pace}</p>
       <p>SHO ${element.shooting}</p>
       <p>PAS ${element.passing}</p>
       <p>DRI ${element.dribbling}</p>
       <p>DEF ${element.defending}</p>
       <p>PHY ${element.physical}</p>
       </div>
  `;

    added_players_container.appendChild(added_players_cards);
  });
}