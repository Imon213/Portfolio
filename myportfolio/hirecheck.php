<?php
require('db.php');
$conn = getConnection();

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $title=$_POST['title'];
    $details=$_POST['details'];
    if($name!="" && $email!="" && $phone!="" && $title!="" && $details!="")
    {
        $sql = "INSERT INTO data(name,email,phone,title,details) VALUES('$name','$email','$phone','$title','$details')";
        $result = mysqli_query($conn, $sql); 
    }
}
?>