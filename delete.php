<?php 

if(session_id() == '' || !isset($_SESSION)){session_start();}

include('config.php');

$pid = $_GET['product_id'];

$sql = "DELETE FROM products WHERE id=" .$pid;

if ($mysqli->query($sql) === TRUE){
    $msg = "Product Deleted sucessfully";
    header("location: success.php?msg=". $msg);
}else{
	header("location: products.php");
}

?>