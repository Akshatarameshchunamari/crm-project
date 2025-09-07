<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Add Customer</title></head>
<body>
<h2>Add Customer</h2>
<form method="post">
  Name: <input type="text" name="name"><br>
  Email: <input type="email" name="email"><br>
  Phone: <input type="text" name="phone"><br>
  <input type="submit" name="save" value="Save">
</form>
<?php
if(isset($_POST['save'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $conn->query("INSERT INTO customers(name,email,phone) VALUES('$name','$email','$phone')");
  header("Location: customers.php");
}
?>
</body>
</html>