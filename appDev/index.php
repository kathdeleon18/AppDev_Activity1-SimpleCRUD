<?php 
    include 'database.php';
?>

<h2>BINI MERCHANDISE</h2>
<table border = "1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Actions</th>
    </tr>

<?php 
$sql = "SELECT * FROM tblproducts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["description"] . "</td>
            <td>" . $row["price"] . "</td>
            <td>" . $row["quantity"] . "</td>
            <td>" . $row["createdAt"] . "</td>
            <td>" . $row["updatedAt"] . "</td>
            <td>
            <a href = 'readProducts.php?id=" . $row["id"] . "'>View</a> |
            <a href = 'updateProducts.php?id=" . $row["id"] . "'>Edit</a> |
            <a href = 'deleteProducts.php?id=" . $row["id"] . "'>Delete</a>
            </td>
        </tr>";
    }
} 
    else {
        echo "<tr><td colspan ='8'>No products found</td></tr>";
}
    $conn->close();
?>
</table>
<br></br>
<a href = "createProducts.php">Add New BINI Merchandise</a>