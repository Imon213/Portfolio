<?php
require('db.php');
$conn=getConnection();
$sql="select * from data";
$result= mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .maindiv{
            width:60%;
            margin: 0 auto;
            margin-top:100px;
            border:solid black 1px;
        }
        th{
            font-size:25px;
            background:silver;
            font-family: cursive;
            color: white;
        }
        body{
            background:mediumseagreen;
        }
        td{
            background:orange;
            padding-left:10px;
            padding-right:10px;
           font-size:18px;
           color:green;
           font-family: verdana;
        }
        td:hover{
            background:tomato;
        }
        
        
        </style>
</head>
<body>
    <div class="maindiv">
        <table >
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Title</th>
                    <th width="500">Details</th>
</tr>
</thead>
<?php while($row=mysqli_fetch_array($result)){?>
    <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td align="centers"><?php echo $row['title'];?></td>
        <td align="center" class="details"><?php echo $row['details'];?></td>
</tr>
    <?php } ?>
            
</table>
</div>
</body>
</html>