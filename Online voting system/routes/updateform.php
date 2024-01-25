<?php
  require_once('../api/connect.php');
// Assume you have an ID parameter in the URL
$ide = $_GET['rn'];
 
$ide=$_GET['rn'];
// Fetch data from the database (similar to the previous example)
$sql = "SELECT * FROM  user WHERE id = ?";
$stmt = $connect->prepare($sql);
$stmt->bind_param("i", $ide);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
 //var_dump($row);  
// Close the database connection
$stmt->close();
$connect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <title>Edit Form</title>
</head>
<body>

<form action="..\api\update.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo ($row['name']); ?>" />

    <label for="email"> Address:</label>
    <input type="text" name="address" value="<?php echo ($row['address']); ?>" />

    <label for="age">Mobile:</label>
    <input type="tel" name="mobile" value="<?php echo ($row['mobile']); ?>" />

    <input type="hidden" name="id" value="<?php echo ($row['id']); ?>" />
    
  

    <input type="submit" value="Update" />
</form>

</body>
</html>

