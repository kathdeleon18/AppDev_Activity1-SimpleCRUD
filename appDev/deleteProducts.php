<?php 
    include 'database.php';
?>

<?php 
    $id = $_GET['id'];

    $sql = "DELETE FROM tblproducts WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>

<a href = "index.php">Go to BINI Merchandise List</a>



