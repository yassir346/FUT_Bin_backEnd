<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../src/styles.css" />
    <title>FutBin</title>
  </head>
  <body>
    <!--Bar de navigation-->
    <nav class="d-flex justify-content-between align-items-center">
      <h4 class="fw-bold fs-4 d-none d-lg-block">FUTBIN</h4>
      <ul class="d-flex gap-3 align-items-center d-none d-lg-flex">
        <li>HOME</li>
        <li><a href="dashboard.php">dashboard</a></li>
      </ul>
    </nav>
    <!--Fin de bar de navigation-->

    <!--Contenair de trois divisions-->
    <div class="larger-container d-flex flex-row justify-content-evenly mt-3">
        <div> <!--List des joueurs générés depuis fichier json-->
            <h1>List des joueurs</h1>
            <div class="players-container" id="players-container"></div>
        </div> <!--Fin List des joueurs générés depuis fichier json-->
      
      <!--Centenaire du terrain-->
      <div id="container-2">
       
        <div id="player1">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
        <div id="player2">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
        <div id="player3">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
        <div id="player4">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
        <div id="player5">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
        <div id="player6">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
        <div id="player7">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
        <div id="player8">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
        <div id="player9">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
        <div id="player10">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
        <div id="player11">
          <a href="#players-container">
            <img class="playerCard" src="../img/badge_gold.webp" alt="" />
          </a>
        </div>
      </div>
      <!--Fin du Centenaire du terrain-->
      <!--Contenaire du formulaire pour ajouter jouer-->
      <div class="containerr">
        <h1>Création de l'équipe</h1>

        <label for="formation">Choisir une formation :</label>
        <select id="formation">
          <option value="4-4-2">4-4-2</option>
          <option value="4-3-3">4-3-3</option>
        </select>

        <h2>Ajouter un joueur :</h2>

        <form id="playerForm">
          <div class="scroll_inputs">
            <input type="text" id="name" placeholder="Nom du Joueur" required />

            <input
              type="url"
              id="photo_joueur"
              placeholder="Photo du joueur (url)"
              required
            />
            <select id="position" name="position" required>
              <option value="" disabled selected>Position du joueur</option>
              <option value="RW">Right Wing (RW)</option>
              <option value="LW">Left Wing (LW)</option>
              <option value="ST">Striker (ST)</option>
              <option value="CM-CENT">Central Midfield (CM)-CENTER</option>
              <option value="CM-LEFT">Central Midfield (CM)-LEFT</option>
              <option value="CM-RIGHT">Central Midfield (CM)-RIGHT</option>
              <option value="CB-RIGHT">Center Back (CB)-RIGHT</option>
              <option value="CB-LEFT">Center Back (CB)-LEFT</option>
              <option value="RB">RIGHT Back (RB)-RIGHT</option>
              <option value="LB">LEFT Back (RB)-LEFT</option>
              <option value="GK">Goalkeeper (GK)</option>
            </select>

            <input
              type="text"
              id="nationalité"
              placeholder="Nationalité"
              required
            />
            <input
              type="url"
              id="photo_flag"
              placeholder="Photo du Flag (url)"
              required
            />
            <input type="text" id="club" placeholder="Club" required />

            <input type="number" id="pace" placeholder="pace" required />

            <input
              type="number"
              id="shooting"
              placeholder="shooting"
              required
            />
            <input type="number" id="passing" placeholder="passing" required />
            <input
              type="number"
              id="dribbling"
              placeholder="Dribbling"
              required
            />
            <input
              type="number"
              id="defending"
              placeholder="Defending"
              required
            />
            <input
              type="number"
              id="physical"
              placeholder="Physical"
              required
            />
          </div>
          <button id="add_player_button" type="button">Ajouter Joueur</button>
        </form>

        <h3>Chimie de l'équipe <span id="teamChemistry">0</span></h3>
      </div>
      <!--Fin Contenaire du formulaire pour ajouter jouer-->
    </div>
    <!--Fin du Contenaire de trois divisions-->
    <!--contenaire de joueurs ajoutés-->

    <div>
        <hr>
        <h1 id="joueurs_ajoutés">Joueurs Ajoutés :</h1>
    <div id="added_players_container">

    </div>
</div>

    <script src="../script.js"></script>
  </body>
</html>
