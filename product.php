<?php
include('home.php');

?>
<div class="container mt-5">
    <h2>Product Form</h2>
    <form method="POST">
      <div class="form-group">
        <label for="productName">Product Name:</label>
        <input type="text" class="form-control" name="productName" placeholder="Enter product name">
      </div>
      <button type="submit" name="product" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <?php
  if(isset($_POST['product'])){

$conn=mysqli_connect('localhost','root','','berwashop');
$name=$_POST['productName'];
$sql="INSERT INTO `product`(`ProductCode`, `ProductName`) VALUES (null,'$name')";
 
 if(mysqli_query($conn,$sql)){
    echo"Product Inserted successfully!";
 }
}
 ?>
