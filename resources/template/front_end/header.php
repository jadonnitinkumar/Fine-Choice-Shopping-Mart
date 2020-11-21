<?php require_once("../resources/config.php"); ?>
<div class="navbar">
    <ul>
        <div class="iii">
            <li><b><a href="index.php">HOME</a></b></li>
            <li><b><a href="dashboard/index.php">ADMIN</a></b></li>
            <li><b><a href="#linking">ABOUT-US</a></b></li>
            <div class="dropdown">
                <button class="dropbtn"><b><a href="#linking1">CATEGORY</a></b></button>
                <div class="dropdown-content">
                    <?php get_categories_in_dropdown(); ?>
                </div>
            </div>
            <li><b><a href="checkout.php">CART</a></b>
            <li><b><a href="contact.php">CONTACTS</a></b></li>
            <?php if(isset($_SESSION['email'])){?>
            <li><b><a href="">Login | Register</a></b>
                <?php
				}else{
				echo '<li><b><a href=""><?php echo $_SESSION["name"]; ?> Login | Register</a></b>';
                }?>
                <ul>
        </div>