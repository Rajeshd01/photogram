<?php



function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_templates/$name.php"; //not consistant.
}


function validate_credentials($username, $password)
{
    if ($username == "rajeshd01@gmail.com" and $password == "password") {
        return true;
    } else {
        return false;
    }
}


