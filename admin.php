<?php 
require_once ('include/DB.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
    <table width="1000" border="4" align="center">
        <caption>Admin</caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>


    <?php 
    $conn;
    $sql = "SELECT * FROM `record`";
    $stnt = $conn->query($sql);
    while ($DataRows=$stnt->fetch()){
        $id         =  $DataRows["id"];
        $Name       =  $DataRows["name"];
        $Email      =  $DataRows["email"];
        $Password   =  $DataRows["password"];
     ?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $Name; ?></td>
        <td><?php echo $Email; ?></td>
        <td><?php echo $Password; ?></td>
        <td> <a href="update.php?id=<?php echo $id; ?>">Update</td>
        <td> <a href="delete.php?id=<?php echo $id; ?>">Delete</td>
        
    </tr>
    <?php } ?>
    </table>
    </div>

    </div>
    </form>
</body>
</html>