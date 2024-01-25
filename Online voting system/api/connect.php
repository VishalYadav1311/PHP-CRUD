<?php

$connect=mysqli_connect("localhost","root", "", "voting") or die("connection failed");
if($connect){
  
}else{
    echo "Database Not Connected ";
    die;
}
?>