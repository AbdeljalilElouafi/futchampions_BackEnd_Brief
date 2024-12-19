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

function display_countries() {

    $conn = connect_db();

    $sql = "SELECT * FROM countries";
    $result = mysqli_query($conn, $sql);

    
    if (!$result) {
        die("Invalid query: " . $conn->error);
    }

    $countries = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $countries;
    
}

function display_clubs() {

    $conn = connect_db();

    $sql = "SELECT * FROM clubs";
    $result = mysqli_query($conn, $sql);

    
    if (!$result) {
        die("Invalid query: " . $conn->error);
    }

    $clubs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $clubs;
    
}

