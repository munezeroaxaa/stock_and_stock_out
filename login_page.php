<?php
session_start();
$_SESSION['message']="";
$conn=mysqli_connect('localhost','root','','berwashop');
$user=$_POST['UserName'];
$pass=$_POST['inputPassword'];
$sql="SELECT * FROM `shopkeeper` WHERE UserName='$user' and Password='$pass'";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){

  foreach($result as $row){

session_start();
$_SESSION['name']=$row['UserName'];

header('Location:home.php');

  }}
  else{
    $_SESSION['message']="Incorrect username or Password";
header('Location:index.php');


  }
    


?>