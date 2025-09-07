<?php 
include 'db.php'; 
$id = $_GET['id'];
$conn->query("DELETE FROM customers WHERE id=$id");
header("Location: customers.php");
?>