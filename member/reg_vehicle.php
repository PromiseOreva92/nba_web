<?php
session_start();
$id = $_SESSION['ownerid'];
require '../inc/includes.php';
	 if($link=mysqli_connect($host,$user,$password,$database)){
		$brand = mysqli_real_escape_string($link,$_POST['brand']);
		$model = mysqli_real_escape_string($link,$_POST['model']);
		$license = mysqli_real_escape_string($link,$_POST['license']);
                $reg = mysqli_real_escape_string($link,$_POST['reg']);
                $vehicle = mysqli_real_escape_string($link,$_POST['vehicle']);
                $info = mysqli_real_escape_string($link,$_POST['info']);                
                $query="insert into vehicle values(NULL,'$id','$vehicle','$brand','$model','$license','$reg','$info')";
                
                if(mysqli_query($link, $query)){
                    ?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Registration Successful!!!</strong>
</div>
<?php
                }
                else{
                    
                    ?>
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Registration Failed!!!</strong>
</div>
<?php
                }
                
                
         }




