<?php
// echo'<script>
//  alert("login successful");
//  </script>';
   include("connect.php");
$phone=$_POST["phoneno"];
$pass=$_POST["password"];

if($_SERVER["REQUEST_METHOD"]=="POST"){
//   $sql=" SELECT * FROM `user` WHERE `mobile` = 1234567890 AND `password` LIKE '123'";
    $result=mysqli_query($connect," SELECT * FROM `user` WHERE `mobile` =' $phone' AND `password` ='$pass'")->fetch_assoc();
 
//var_dump($result);
if($result){
    echo ' <script>
      window.location="../routes/dashboard.php";
      alert("login successful");
    </script>';
}
else{
    echo ' <script>
    alert("Wrong creditionals");
    window.location="../index.html";
  </script>';
}
}
else{
    echo " login error occured ".mysqli_error();
}


?>