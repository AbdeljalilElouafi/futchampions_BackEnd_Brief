<?php
require_once __DIR__ . '/config/db.php';

$conn = connect_db();



if(isset($_GET["id"])) {
    $player_id = $_GET["id"];


 $sql = "DELETE FROM players WHERE player_id=$player_id";
 $conn->query($sql);


}

  header("location: /futchampions_BackEnd_Brief/index.php");
  exit;

?>