


<?php
 require_once("./connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $ide = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
}

 
 
// $sql = "UPDATE user SET name='$name', address='$address', mobile=$mobile WHERE id=$ide";
 
$result = mysqli_query($connect, "UPDATE user SET name='$name', address='$address', mobile=$mobile WHERE id=$ide"  );

if ($result) {
    echo '<script>
        window.location="../routes/dashboard.php";
        alert("Updation successful");
    </script>';
} else {
    echo "Error: " . mysqli_error($connect);
}

// Close the connection
mysqli_close($connect);
?>
