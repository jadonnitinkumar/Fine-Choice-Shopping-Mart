<?php require_once("../resources/config.php");

if(isset($_Post['login'])){

$name = ($_POST['Username']);
$pass = ($_POST['password']);
$mail = ($_POST['email']);
$phone = ($_POST['phoneno']);

$s = "select * from shoptable where name = '$name'";

$result = mysqli_query($connection, $s);
$num = mysqli_num_rows($result);

if($num==1){

	echo "Username already taken";
}else{

	$query=query("insert into shoptable(name,password,email,phoneno) values ('$name' ,'$pass','$mail','$phone')");
	confirm($query);
	mysqli_query($connection,$query);
	echo "Registration Successful";
	echo $name;
echo "anish singhal";
}
echo $name;
echo "anish singhal";

}

?>