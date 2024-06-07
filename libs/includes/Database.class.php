<?php

class Database
{
    public static $conn = null;
    public static function getConnection()
    {
        if (Database::$conn == null) {
            $servername = "mysql.selfmade.ninja";
            $username = "Rajesh";
            $password = "Rajeshd@mysql123";
            $dbname = "Rajesh_logindb";
        
            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error); //TODO: Replace this with exception handling
            } else {
                printf("New connection establishing...");
                Database::$conn = $connection; //replacing null with actual connection
                return Database::$conn;
            }
        } else {
            printf("Returning existing establishing...");
            return Database::$conn;
        }
    }
}
