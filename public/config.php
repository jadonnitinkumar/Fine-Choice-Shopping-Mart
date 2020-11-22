<?php

$con=mysqli_connect('localhost','root','','ecom_db');

if(!$con)
{
    die(' Please Check Your Connection'.mysqli_error($con));
}
?>