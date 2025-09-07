<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Add Service Request</title></head>
<body>
<h2>Add Service Request</h2>
<form method="post">
  Customer: 
  <select name="customer_id">
    <?php
    $result = $conn->query("SELECT * FROM customers");
    while($row = $result->fetch_assoc()){
      echo "<option value='{$row['id']}'>{$row['name']}</option>";
    }
    ?>
  </select><br>
  Description: <textarea name="description"></textarea><br>
  <input type="submit" name="save" value="Save">
</form>
<?php
if(isset($_POST['save'])){
  $customer_id=$_POST['customer_id'];
  $description=$_POST['description'];
  $conn->query("INSERT INTO service_requests(customer_id,description) VALUES('$customer_id','$description')");
  header("Location: requests.php");
}
?>
</body>
</html>