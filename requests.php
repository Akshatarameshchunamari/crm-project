<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Service Requests</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Service Requests</h2>
  <a href="add_request.php">+ Add Request</a>
  <table border="1">
    <tr><th>ID</th><th>Customer</th><th>Description</th><th>Status</th></tr>
    <?php
    $sql = "SELECT service_requests.id, customers.name, service_requests.description, service_requests.status 
            FROM service_requests 
            JOIN customers ON service_requests.customer_id = customers.id";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['status']}</td>
              </tr>";
    }
    ?>
  </table>
</body>
</html>