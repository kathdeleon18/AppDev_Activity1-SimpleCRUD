<?php
    include 'database.php';
?>

<?php
$id = $_GET['id'];
$sql ="SELECT * FROM tblproducts WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE tblproducts SET name = '$name', description = '$description', price = $price, quantity = $quantity WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    }
?>

<h2>Add New Product</h2>
<form method = "post" action = "">
    Name: <input type = "text" name = "name" value = "<?php echo $row['name']; ?>" required><br></br>
    Description: <textarea name = "description" required><?php echo $row['description']; ?></textarea><br></br>
    Price: <input type = "text" name = "price" value = "<?php echo $row['price']; ?>" required><br></br>
    Quantity: <input type = "number" name = "quantity" value = "<?php echo $row['quantity']; ?>" required><br></br>
    <input type = "submit" value = "Update Product">
</form>
<br></br>
<a href = "index.php">Go to BINI Merchandise List</a>
