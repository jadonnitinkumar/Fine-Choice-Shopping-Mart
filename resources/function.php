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
    function escape_string($string){

        global $connection;
    
        return mysqli_real_escape_string($connection,$string);
    }
    
    function fetch_array($result){
    
        return mysqli_fetch_array($result);
    }

//get products

function get_products(){

	$query = query(" SELECT * FROM products where product_category_id<=104");
	confirm($query);

while($row = fetch_array($query)){

  $product_image = display_image($row['product_image']);

	$product = <<<DELIMETER


    <div class="gallery">
        <a target="_blank" href="item.php?id={$row['product_id']}">
            <img src="../resources/{$product_image}" alt="Cinque Terre">
        </a>
        <button class="button">
            <a href="../resources/cart.php?add={$row['product_id']}"><i class="fa fa-shopping-cart" style="color:red;font-size: 20px;"></i>ADD</a>
        </button>
        <div class="desc">{$row['product_title']}</div>
    </div> 


DELIMETER;
	echo $product;
}

}