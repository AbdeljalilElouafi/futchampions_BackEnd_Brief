<?php
if(isset($_GET["id"])) {
    $player_id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "futchampions_db";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);

 $sql = "DELETE FROM players WHERE player_id=$player_id";
 $conn->query($sql);



}

  header("location: /futchampions_BackEnd_Brief/index.php");
  exit;

?>