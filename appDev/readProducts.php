<?php
include 'database.php';

$id = isset($_GET['id'])? intval($_GET['id']) : 0;

if ($id > 0){
    $sql = "SELECT * FROM tblproducts WHERE id =$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $row = $result->fetch_assoc();

    ?>

    <h2>Product Details</h2>
    <table border = "1">
        <tr>
            <th>ID</th>
            <td><?php echo $row["id"]; ?></td>
        </tr>

        <tr>
            <th>Name</th>
            <td><?php echo htmlspecialchars($row["name"]); ?></td>
        </tr>

        <tr>
            <th>Description</th>
            <td><?php echo htmlspecialchars($row["description"]); ?></td>
        </tr>

        <tr>
            <th>Quantity</th>
            <td><?php echo $row["quantity"]; ?></td>
        </tr>

        <tr>
            <th>Created At</th>
            <td><?php echo $row["createdAt"]; ?></td>
        </tr>

        <tr>
            <th>Updated At</th>
            <td><?php echo $row["updatedAt"]; ?></td>
        </tr>
    </table>

    <?php
    }
    else{
        echo "No product found with ID" . $id;
    }

    $conn->close();
    }
    else {
        echo "Invalid product ID.";
    }
    ?>

    <br></br>
    <a href = "index.php">Back to BINI Merchandise List</a>

