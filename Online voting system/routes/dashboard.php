<?php
require_once('../api/connect.php');
$sql="Select * from user;";
$result=mysqli_query($connect,$sql);
//var_dump($result);
//echo mysqli_fetch_assoc('$result') ; die();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Online Voting System</title>
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>

<body>

    <header>
        <div class="navbar">
            <h1>Online Voting System</h1>
            <div class="buttons">
                <button id="backButton">Back</button>
               <a href="../index.html"> <button  id="logoutButton">Logout</button></a>
            </div>
        </div>

    </header>

    <!-- Your content goes here -->
    <main>
        <table class="table">
            <tr>
                <th>S.NO</th>
                <th>Unique ID</th>
                <th>NAME</th>
                <th>Address</th>
                <th>Phone No.</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_assoc($result)){
$i++;
            ?>
            <tr>  
                <td>   <?php echo $i?></td>
                <td>   <?php echo $row['id'] ?></td>
                <td>   <?php echo $row['name']?></td>
                <td>   <?php echo $row['address']?></td>
                <td>   <?php echo $row['mobile']?></td>
                <td>  <a href="./updateform.php?rn=<?php echo $row['id']; ?>" ><button>Edit</button></a></td>
                <td> <a href="../api/delete.php?rn=<?php echo $row['id']; ?>" > <button> Delete</button></a></td>
            </tr>
            <?php
            }
            ?>
             
    </main>

    <!-- <script src="scripts.js"></script> -->
</body>

</html>