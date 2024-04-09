<!DOCTYPE html>
<?php
include('home.php');

?>
  <div class="container">
    <h1 >ProductIn Information</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Product Code</th>
          <th>Date</th>
          <th>Quantity</th>
          <th>Unique Price</th>
          <th>Total Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Assuming you have established a connection to your database
$connection=mysqli_connect('localhost','root','','berwashop');
        // Query to select all columns from ProductIn table joined with Product table
        $query = "SELECT pi.*, p.ProductName
                  FROM ProductIn pi
                  INNER JOIN Product p ON pi.ProductCode = p.ProductCode";

        $result = mysqli_query($connection, $query);

        if ($result) {
          // Fetching the data and displaying it in the table rows
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['ProductName']}</td>";
            echo "<td>{$row['ProductCode']}</td>";
            echo "<td>{$row['Date']}</td>";
            echo "<td>{$row['Quantity']}</td>";
            echo "<td>{$row['UniquePrice']}</td>";
            echo "<td>{$row['TotalPrice']}</td>";
            echo "</tr>";
          }

          // Free result set
          mysqli_free_result($result);
        } else {
          echo "<tr><td colspan='6'>No data found</td></tr>";
        }

        // Close connection
        mysqli_close($connection);
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS Bundle from CDN for dropdowns, modals, etc. -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
