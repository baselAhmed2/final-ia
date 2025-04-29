<?php
include("sign-connection.php"); 
$id = $_GET['id'];

// Fetch existing product details
$qry1 = mysqli_query($db, "SELECT * FROM product WHERE id='$id'");
$data = mysqli_fetch_array($qry1);

// If update button is clicked
if (isset($_POST['update'])) {
    $productname = $_POST['productname'];
    $color = $_POST['color'];
    $price = $_POST['price'];

    $sql1 = "UPDATE product SET productname='$productname', color='$color', price='$price' WHERE id='$id'";
    $edit = mysqli_query($db, $sql1);

    if ($edit) {
        mysqli_close($db); // Close connection
        header("Location:home.php"); // Redirect
        exit;
    } else {
        echo mysqli_error($db);
    }
}
?>
<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="productname" value="<?php echo $data['productname']; ?>" placeholder="Enter Product Name" required>
  
  <input type="text" name="color" value="<?php echo $data['color']; ?>" placeholder="Enter Color" required>
  
  <input type="text" name="price" value="<?php echo $data['price']; ?>" placeholder="Enter Price" required>
  
  <input type="submit" name="update" value="Update">
</form>
