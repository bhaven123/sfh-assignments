<?php
function openConn(){
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'sfh_project_3';

    $mysqli = @new mysqli(
        $db_host,
        $db_user,
        $db_password,
        $db_db
    );

    if ($mysqli->connect_error) {
        echo 'Errno: '.$mysqli->connect_errno;
        echo '<br>';
        echo 'Error: '.$mysqli->connect_error;
        exit();
    }
    // Hiding successful database connection on the HTML page
    ob_start();
    echo 'Success: A proper connection to MySQL was made.';
    echo '<br>';
    echo 'Host information: '.$mysqli->host_info;
    echo '<br>';
    echo 'Protocol version: '.$mysqli->protocol_version;
    $php_output = ob_get_clean();

    return $mysqli;
}
function closeConn($mysqli){
    $mysqli->close();
}
