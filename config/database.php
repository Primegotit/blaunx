<?php
    define('HOST', 'localhost');
    define('USERNAME','root');
    define('PASSWORD', '');
    define('DATABASE', 'blaunx');

    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    
    if($conn->connect_error){
        die('Connection Failed' . $conn->connect_error);

    }

?>