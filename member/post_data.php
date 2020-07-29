<?php
session_start();
require 'inc.php';
$title = $_POST['title'];
$property = $_POST['property'];
$state = $_POST['state'];
$location = $_POST['locations'];
$address = $_POST['address'];
$condition = $_POST['condition'];
$bedrooms = $_POST['bedrooms'];
$bathrooms = $_POST['bathrooms'];
$totalrooms = $_POST['totalrooms'];
$parkingspace = $_POST['parkingspace'];
$mintime = $_POST['mintime'];
$furnishing = $_POST['furnishing'];
$price = $_POST['price'];
$brokerfee = $_POST['brokerfee'];
$exchangepossible = $_POST['exchangepossible'];
$info = $_POST['info'];
$time = time();
$id = strval($_SESSION['admin_id'].$time);
$id=intval($id);


$query = "insert into properties values('$id','$title','$property','$state',
'$location','$address','$condition','$bedrooms','$bathrooms','$totalrooms','$parkingspace',
'$furnishing','$mintime','$price','$brokerfee','$exchangepossible','$info','$time')";

if(mysqli_query($link,$query)){
    echo "postmedia.php?query=".$id;
}else{
    echo "failed";
}
?>