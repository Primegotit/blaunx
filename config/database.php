<?php
    define('HOST', 'localhost');
    define('USERNAME','root');
    define('PASSWORD', '');
    define('DATABASE', 'blaunx');

    $conn = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);

    if($conn->connect_error){
        die('Connection Failed' . $conn->connect_error);

    }
    echo "Connected!";

?>