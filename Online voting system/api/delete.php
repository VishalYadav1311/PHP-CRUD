<?php
 include("connect.php");

//error_reporting(0);
 
$ide=$_GET['rn'];
 
 
$sql="DELETE from user where id=$ide";
 
 $data=mysqli_query($connect,$sql);
 
 
if($data){
echo '<script>
window.location="../routes/dashboard.php";
alert("user deleted");

</script>';
}
else{
    echo '<script>
    window.location="../routes/dashboard.php";
            alert("UNABLE TO DELETE USER");
            
    </script>';
}
?>