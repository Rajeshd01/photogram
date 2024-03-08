<?php

function load_template($name){
    
    include $_SERVER['DOCUMENT_ROOT']."/photogram/__templates/$name.php";
}