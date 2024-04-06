<?php
include('home.php');
$conn=mysqli_connect('localhost','root','','berwashop');

?>
<div class="container mt-5">
    <h2>Product out today</h2>
    <form method="POST">
      <div class="form-group">
        <label for="productCode">Product Code:</label>

<select name="productcode" class="form-control" id="">
    <?php
$product="SELECT * FROM `productin`";
$res=mysqli_query($conn,$product);
if(mysqli_num_rows($res)){
foreach($res as $row){
?>
<option value="<?php echo $row['ProductCode'];?>"><?php echo $row['ProductCode'];?></option>
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
      <!-- <div class="form-group">
        <label for="uniquePrice">Unique Price:</label>
        <input type="number" class="form-control" name="uniquePrice" placeholder="Enter unique price">
      </div> -->
      <button type="submit" name="product_in" class="btn btn-primary">Submit</button>
    </form>
  </div>


  <?php
  if(isset($_POST['product_in'])){
  $code=$_POST['productcode'];
  $qty=$_POST['quantity'];
  $date=$_POST['date'];
  
$prodcheck="SELECT * FROM `productin` WHERE `ProductCode`='$code';";
$res=mysqli_query($conn,$prodcheck);
if(mysqli_num_rows($res)){
foreach($res as $row){
if($row['Quantity']>= $qty){
    $up=$row['UniquePrice'];
    $total=$up*$qty;

$prodin_up=$row['UniquePrice'];
$prodin_qty=$row['Quantity']-$qty;
$prodin_total=$prodin_up*$prodin_qty;

  $sql="INSERT INTO `productout`(`ProductCode`, `Date`, `Quantity`, `UniquePrice`, `TotalPrice`) VALUES   ('$code','$date',' $qty',' $up','$total')";
$update_proct_in="UPDATE `productin` SET `Quantity`='$prodin_qty',`UniquePrice`='$prodin_up',`TotalPrice`='$prodin_total' WHERE `ProductCode`='$code'";

  if((mysqli_query($conn,$sql)) && (mysqli_query($conn,$update_proct_in))){
   ?>
   <span class="text-success text-center">
   
<?php 
echo"New product has added suceesfully!";?>
   </span>
<?php
}
}else{
    echo"Sorry Quantity entered is greater than product in! ";
}



}}

else{
    echomysqli_error($conn);
}


}
  ?>