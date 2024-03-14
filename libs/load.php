<?php

function load_template($name){
    
    include $_SERVER['DOCUMENT_ROOT']."/photogram/__templates/$name.php";
}



function validate_crediential($username, $password){
    if($username== 'rajeshd@gmail.com' and $password== 'rajeshd01'){
        return true;
    }
    else{
        return false;
    }

}

function signup($username, $password, $email, $phone){
    $servername = "mysql.selfmade.ninja:3306";
    $username = "Rajesh";
    $password = "Rajeshd@mysql123";
    $dbname = "Rajesh_logindb";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
    VALUES ('$username', '$password', '$email', '$phone', '0', '1')";

    $result = false;

    if ($conn->query($sql) === TRUE) {
        $result = true;
    } else {
        $result = false;
    }

    $conn->close();

    return $result;
}