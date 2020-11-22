<?php

$uploads_directory = "uploads";

// helper function

function redirect($location){

	return header("Location: $location ");
}
function set_message($msg){

    if(!empty($msg)){

        $_SESSION['message'] = $msg;
    }else{

        $msg = "";
    }
}
function display_message(){

    if(isset($_SESSION['message'])){

        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}
