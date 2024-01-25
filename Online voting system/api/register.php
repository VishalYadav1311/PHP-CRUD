<?php
  include("connect.php");
   $name=$_POST['name'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  $cpassword=$_POST['confirmPassword'];
  $address=$_POST['address'];
  $role=$_POST['role'];
   
  if($password==$cpassword){
    
   $insert=mysqli_query($connect, " INSERT INTO user (name,mobile,address,password ,role,status,votes)
     VALUES ('$name', $mobile, '$address','$password',  '$role', 0, 0)");

    //  var_dump($insert); die;
    if($insert){
        echo ' <script>
        alert("Registration Successful!");
        window.location="../index.html";
        </script>';
    }  else{
        echo '<script> 
        alert("Some Error Occured.");
        window.location="../routes/register.html";
        </script>
        ';
      }

}else{
   
    echo '<script> 
    alert("Password Not Matched.");
    window.location="../routes/register.html";
    </script>
    ';
  }
?>