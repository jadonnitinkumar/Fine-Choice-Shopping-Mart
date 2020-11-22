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
function last_id(){
    global $connection;
    
    return mysqli_insert_id($connection);
    }
    
    function query($sql){
    
        global $connection;
    
        return mysqli_query($connection, $sql);
    }
    
    
    function confirm($result){
    
    global $connection;
    if(!$result){
        
        die("QUERY FAILED" . mysqli_error($connection));
    }
    
    }
