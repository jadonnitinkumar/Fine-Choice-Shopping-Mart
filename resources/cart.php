<?php require_once("config.php"); ?>
<?php
    if(isset($_GET['add'])){

	$query =query("SELECT * FROM products WHERE product_id =" . escape_string($_GET['add']) . " ");
	confirm($query);

	while($row = fetch_array($query)){

		if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){

			$_SESSION['product_' . $_GET['add']] +=1;
			redirect("../public/checkout.php");

		}else{

			set_message("We only have " . $row['product_quantity'] . " {$row['product_title']}" . " available");
			redirect("../public/checkout.php");
		}
    }

// $_SESSION['product_' . $_GET['add']] +=1;

// redirect("index.php");
}
if(isset($_GET['remove'])){

	$_SESSION['product_' . $_GET['remove']]--;

	if($_SESSION['product_' . $_GET['remove']] < 1){

		unset($_SESSION['item_total']);
		unset($_SESSION['item_quantity']);

		redirect("../public/checkout.php");
	}else
	{

		redirect("../public/checkout.php");
	}
}
if(isset($_GET['delete'])){
    $_SESSION['product_' . $_GET['delete']] = '0';
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);
    
    
    redirect("../public/checkout.php");
    
    }