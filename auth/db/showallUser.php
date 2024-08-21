<!-- class 167  class 170-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user table</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td,th{
            text-align: left;
            border: 1px solid #ddd;
            padding: 8px;
        }
        tr:nth-child(even){
            background: #ddd;
        }
    </style>
</head>
<body>
    <h2>
        <?php if(isset($_GET['msg'])){
            echo $_GET['msg'];
        } ?>
    </h2>
    <table>
        <tr>
            <th>serial no</th>
            <th>User Name</th>
            <th>Email</th>
            <th> action </th>
        </tr>
        <?php
        require_once("config.php");

        $query = "SELECT * FROM user";

        $sql = $conn->query($query);

        while($rows = $sql->fetch_assoc()){
           
       

        ?>
        <tr>
            <td><?php echo $rows['id'] ?></td>
            <td><?php echo $rows['username'] ?> </td>
            <td><?php echo $rows['email']  ?> </td>
            <td><a href="single.php?id=<?php echo $rows['id'] ?>">show</a> <a href="edit.php?id=<?php echo $rows['id'] ?>">update</a> <a href="delete.php?id=<?php echo $rows['id'] ?>" onclick="return confirm('do you want to delete?');">delete</a></td>
        </tr>
        <?php
             }
        ?>
    </table>
</body>
</html>