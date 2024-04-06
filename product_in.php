<?php
include('home.php');
$conn=mysqli_connect('localhost','root','','berwashop');

?>
<div class="container mt-5">
    <h2>Add new Product in</h2>
    <form method="POST">
      <div class="form-group">
        <label for="productCode">Product Code:</label>

<select name="productcode" class="form-control" id="">
    <?php
$product="SELECT * FROM `product`";
$res=mysqli_query($conn,$product);
if(mysqli_num_rows($res)){
foreach($res as $row){
?>
<option value="<?php echo $row['ProductCode'];?>"><?php echo $row['ProductName'];?></option>
<?php
}
}
?>

</select>



    </div>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" name="date">
      </div>
      <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" class="form-control" name="quantity" placeholder="Enter quantity">
      </div>
      <div class="form-group">
        <label for="uniquePrice">Unique Price:</label>
        <input type="number" class="form-control" name="uniquePrice" placeholder="Enter unique price">
      </div>
      <button type="submit" name="product_in" class="btn btn-primary">Submit</button>
    </form>
  </div>


  <?php
  if(isset($_POST['product_in'])){
  $code=$_POST['productcode'];
  $qty=$_POST['quantity'];
  $date=$_POST['date'];
  $up=$_POST['uniquePrice'];
  $total=$up*$qty;

  $sql="INSERT INTO `productin`(`ProductCode`, `Date`, `Quantity`, `UniquePrice`, `TotalPrice`) VALUES
   ('$code',' $date',' $qty',' $up','$total')";
if(mysqli_query($conn,$sql)){
   ?>
   <span class="text-success text-center">
   
<?php 
echo"New product has added suceesfully!";?>
   </span>
<?php
}else{
    echomysqli_error($conn);
}


}
  ?>