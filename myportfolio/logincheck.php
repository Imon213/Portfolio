<?php
require_once('db.php');
$conn = getConnection();
$email=$_POST['email'];
$pass=$_POST['password'];

if($email!='' && $pass!='')
{
      $sql= "select * from admin where email='{$email}' and password='{$pass}'";
      $result=mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) >0 )
      {
          header('location:dashboard.php');
      }
      else{
          echo 'Invalid';
      }
}

?>