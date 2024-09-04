<?php 
    include 'database.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

    $sql = "INSERT INTO tblproducts (name, description, price, quantity) VALUES ('$name', '$description', $price, $quantity)";

    if ($conn->query($sql) == TRUE){
        echo "New product created successfully";
    }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<h2>Add New Product</h2>
<form method = "post" action = "createProducts.php">
    Name: <input type = "text" name = "name" required><br></br>
    Description: <textarea name = "description" required></textarea><br></br>
    Price: <input type = "text" name = "price" required><br></br>
    Quantity: <input type = "number" name = "quantity" required><br></br>
    <input type = "submit" value = "Add Product">
</form>
<br></br>
<a href = "index.php">Go to BINI Merchandise List</a>
