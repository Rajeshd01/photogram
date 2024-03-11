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