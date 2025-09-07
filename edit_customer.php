<?php 
include 'db.php'; 
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM customers WHERE id=$id");
$customer = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Edit Customer</title></head>
<body>
<h2>Edit Customer</h2>
<form method="post">
  Name: <input type="text" name="name" value="<?php echo $customer['name']; ?>"><br>
  Email: <input type="email" name="email" value="<?php echo $customer['email']; ?>"><br>
  Phone: <input type="text" name="phone" value="<?php echo $customer['phone']; ?>"><br>
  <input type="submit" name="update" value="Update">
</form>
<?php
if(isset($_POST['update'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $conn->query("UPDATE customers SET name='$name', email='$email', phone='$phone' WHERE id=$id");
  header("Location: customers.php");
}
?>
</body>
</html>