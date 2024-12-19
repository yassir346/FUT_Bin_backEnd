<?php
$servername = "db";
$username = "my_user";
$password = "my_password";
$database = "FUT_backend_database";

// 1- create connection with database
// 2 - run docker compose


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//SQL QUERY
$query = "SELECT Player.id, Player.name, Player.position_player, nationnalite.logo as nationnalite_logo, Equipe.logo as Equipe_logo, statistic_player.rating, statistic_player.pace, statistic_player.dribbling, statistic_player.shooting, statistic_player.passing , statistic_player.defending ,statistic_player.physical
FROM Player
INNER JOIN nationnalite ON Player.id_nationnalite = nationnalite.id
INNER JOIN statistic_player ON Player.id_statistic_player = statistic_player.id
INNER JOIN Equipe ON Player.id_Equipe = Equipe.id
INNER JOIN statistic_GK ON Player.id_statistic_GK = statistic_GK.id;";


// FETCHING DATA FROM DATABASE
$result = mysqli_query($conn, $query);

// if(mysqli_num_rows($result) > 0){
//   //OUTPUT DATA OF EACH ROW
//   while($row = mysqli_fetch_assoc($result)){
//     echo "id: " . $row["id"]
//     . " - name: " . $row["name"] . " - position_player: " . $row["position_player"]; 
//   }
// } else {
//   echo "0 results";
// }


?>