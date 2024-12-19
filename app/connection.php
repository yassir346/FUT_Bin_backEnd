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
$query = "SELECT id, name, position_player FROM `Player`;";

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