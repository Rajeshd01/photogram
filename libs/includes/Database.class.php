<?php

/**
 * This class is used to access the database.
 * We have a static variable set to null.
 * Once we established a database connection, it will be stored in $conn variable.
 * And everytime getConnection() method called it wont't make a new connection rather it will return the connection stored from $conn variable.
 * For the first time it will create a new connection to database and this connection is repeated everytime this method is accessed.
 * NOTE: It will not open connections for multiple times, rather it uses the same connection, it's a secure practice to establish connection to database.
 */

class Database
{
    public static $conn = null;

    // Establish a new connection or return the existing connection.
    public static function getConnection()
    {
        if (Database::$conn == null) {
            // Get credentials from config
            $server = get_config('db_server');
            $db_user = get_config('db_user');
            $db_pass = get_config('db_pass');
            $dbname = get_config('db_name');

            // To establish connection to the mysql database
            $connection = new mysqli($server, $db_user, $db_pass, $dbname);

            // Check connection
            if ($connection->connect_error) {
                // ToDo: Replace this with exception handling in FUTURE.
                die("Connection failed: " . $connection->connect_error);
            } else {
                // printf("New connection establishing...\n");
                Database::$conn = $connection;
                return Database::$conn;
            }
        } else {
            printf("Returning the existing connection...\n");
            return Database::$conn;
        }
    }
}

