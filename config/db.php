<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'futchampions_db');

function connect_db() {

    $conn = mysqli_connect(DB_HOST, DB_USER , DB_PASS , DB_NAME);


    if (!$conn) {
        error_log("Connection failed: " . mysqli_connect_error());

        die("Connection failed!");
    }

    mysqli_set_charset($conn, "utf8");

    return $conn;


}


function db_close($conn) {

    mysqli_close($conn);

}


?>
