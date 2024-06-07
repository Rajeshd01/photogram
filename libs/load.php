<?php

include_once 'includes/User.class.php';
include_once 'includes/Database.class.php';
include_once 'includes/Session.class.php';

// Error handling
// error_reporting(E_ALL);

// Photogram config
global $__site_config;
$__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../photogram_config.json');

// Start session when this file is loaded
Session::start();

// Load php templates
function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_templates/$name.php";
}

// Get credentials from config
function get_config($key, $default=null)
{
    global $__site_config;
    $array = json_decode($__site_config, true);
    if (isset($array[$key])) {
        return $array[$key];
    } else {
        return $default;
    }
}

