<?php

# Some useful constants
define('SITE_ROOT', dirname(__FILE__).'/');
define('SITE_URL', '/'.str_replace( $_SERVER['DOCUMENT_ROOT'], "", SITE_ROOT)); # to support subfolders

# Dynamic media URL
define('MEDIA_URL', SITE_URL.'-/');

# Path to includes directory
define('INC_DIR', SITE_ROOT.'-/_inc/');

# Load PHP includes from the defined INC_DIR. Pretty straightforward.
# Be sure to leave ".php" off of the parameter
function load_include($filename){
    require_once(INC_DIR . $filename . '.php');
    echo "\n\n";
}

# Plural of the above function
function load_includes(){
    $filenames = func_get_args();
    # We don't have to worry about performance here.
    foreach( $filenames as $filename ){
        load_include($filename);
    }
}

?>