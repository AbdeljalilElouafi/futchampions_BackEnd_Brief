<?php

require_once __DIR__ . '/../config/db.php';

function display_players() {

    $conn = connect_db();

    $sql = "SELECT * FROM players";
    $result = mysqli_query($conn, $sql);

    
    if (!$result) {
        die("Invalid query: " . $conn->error);
    }

    $players = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $players;
    
}

