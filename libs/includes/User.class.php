<?php

class User
{
    private $conn;

    public function __call($name, $arguments)
    {
        $property = preg_replace("/[^0-9a-zA-Z]/", "", substr($name, 3));
        $property = strtolower(preg_replace('/\B([A-Z])/', '_$1', $property));
        if (substr($name, 0, 3) == "get") {
            return $this->_get_data($property);
        } elseif (substr($name, 0, 3) == "set") {
            return $this->_set_data($property, $arguments[0]);
        }
    }


    // Signup
    public static function signup($username, $password, $email, $phone)
    {
        // Amount of cost requires to generate a random hash
        $options = [
            'cost' => 8
        ];
        // Hashing password
        $password = password_hash($password, PASSWORD_DEFAULT, $options);

        // We assumes this as secure way to hashing a password
        // $password = md5(strrev(md5($password))); // Security through obscurity

        // Create a connection to database
        $conn = Database::getconnection();

        // Insert values into the database
        // Todo: In future, change the sql query table to class variable which is declared in database_class_php file
        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `sec_email`)
        VALUES ('$username', '$password', '$email', '$phone', '0');";

        // Sending the query to the database and checking if it is true or false
        if ($conn->query($sql) === true) {
            $error = false;
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            $error = $conn->error;
        }
        return $error;
    }

    // Login
    public static function login($username, $password)
    {
        // Query to fetch the user data
        $query = "SELECT * FROM `auth` WHERE `username` = '$username'";
        // Create a connection to database
        $conn = Database::getConnection();
        // Get the user details [1 row] by sending this query to database.
        $result = $conn->query($query);
        // Checking the query has a row or not
        if ($result->num_rows == 1) {
            // Fetch the user data in associative array form
            $row = $result->fetch_assoc();
            // Checking the row that has the password which is entered by user.
            // Checking the password entered by user is matching with password in database
            if (password_verify($password, $row['password'])) {
                return $row['username'];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function __construct($username)
    {
        $this->conn = Database::getConnection();
        $this->username = $username;
        $this->id = null;
        $sql = "SELECT `id` FROM `auth` WHERE `username`= '$username' LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            $this->id = $row['id']; // Updating this from database
        } else {
            throw new Exception("Username is not available");
        }
    }

    // It is used to retrieve data from the database
    private function _get_data($var)
    {
        // Create a connection, if it doesn't exist
        if (!$this->conn) {
            $this->conn = Database::getConnection();
        }
        // Query to get data from users table
        $sql = "SELECT `$var` FROM `users` WHERE `id` = $this->id";
        $result = $this->conn->query($sql);
        if ($result and $result->num_rows == 1) {
            return $result->fetch_assoc()["$var"];
        } else {
            return null;
        }
    }

    // It used to set the data in the database
    private function _set_data($var, $data)
    {
        // Create a connection, if it doesn't exist
        if (!$this->conn) {
            $this->conn = Database::getConnection();
        }
        // Query to update the data in users table
        $sql = "UPDATE `users` SET `$var`='$data' WHERE `id`=$this->id;";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function setDob($year, $month, $day)
    {
        // checking data is valid or not
        if (checkdate($month, $day, $year)) {
            return $this->_set_data('dob', "$year.$month.$day");
        } else {
            return false;
        }
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function authenticate()
    {
    }
}

