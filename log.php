<?php

$conn=mysqli_connect('localhost','root','','berwashop');
$user=$_POST['UserName'];
$pass=$_POST['inputPassword'];
$sql="INSERT INTO `shopkeeper`(`ShopkeeperId`, `UserName`, `Password`) VALUES (null,'$user','$pass')";

if(mysqli_query($conn,$sql)){
    echo"Data shop keeper habe been recorded successfuly";
    header('Location:index.php');
}

?>