<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Customers</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Customer List</h2>
  <a href="add_customer.php">+ Add Customer</a>
  <table border="1">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM customers");
    while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>
                  <a href='edit_customer.php?id={$row['id']}'>Edit</a> |
                  <a href='delete_customer.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }
    ?>
  </table>
</body>
</html>