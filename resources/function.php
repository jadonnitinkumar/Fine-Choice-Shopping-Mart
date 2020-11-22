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
function login_user(){

    if(isset($_POST['submit'])){
    $name=escape_string($_POST['usrnm']);
    $password=escape_string($_POST['psw']);
    $email=escape_string($_POST['email']);
    $query = query("SELECT * FROM users where username = '{$name}' and password = '{$password}' and email = '{$email}'");
    confirm($query);
    if(mysqli_num_rows($query) == 0){
    redirect("icon.php");
    }
    else
    {
      $_SESSION['name'] = $usrnm;
        redirect("index.php");
    }
    
    }
    
    
    }
    function sign_shop(){


        if(isset($_POST['submit'])){
        $name=escape_string($_POST['usrnm']);
        $password=escape_string($_POST['psw']);
        $cpassword=escape_string($_POST['psw1']);
        $email=escape_string($_POST['email']);
        $phone=escape_string($_POST['phn']);
        $query = query("SELECT * FROM shoptable where name = '{$name}' ");
        confirm($query);
        
        if(mysqli_num_rows($query) == 1){
        echo "Username Already Exist";
        }
        
        else{
        
            $query = "INSERT INTO shoptable (name, email, password,phoneno) 
                        VALUES('$name', '$email', '$password',$phone)";
                        query($query);
        
        }
        }
        
        }
        function get_categories(){

            $query = query(" SELECT * FROM categories");
            confirm($query);
        
        while($row = fetch_array($query)){
        
          $product_image = display_image($row['cat_img']);
        
            $categories_links = <<<DELIMETER
            <div class="gallery1" style="height: auto;margin-left: 100px;">
                <a href="bread.php?id={$row['cat_id']}">
                    <img class="img-circle" src="../resources/{$product_image}" alt="Cinque Terre" style="width: 200px;">
                </a>
                <div class="desc1">{$row['cat_title']}</div>
            </div>
        
        
        DELIMETER;
            echo $categories_links;
        }
        
        }
        function get_categories_in_dropdown(){

            $query = query(" SELECT * FROM categories");
            confirm($query);
          
          while($row = fetch_array($query)){
          
            $categories_links = <<<DELIMETER
                              
                                  <a href="bread.php?id={$row['cat_id']}">{$row['cat_title']}</a>
                          
                      
          
          
          DELIMETER;
            echo $categories_links;
          }
          
          }
    