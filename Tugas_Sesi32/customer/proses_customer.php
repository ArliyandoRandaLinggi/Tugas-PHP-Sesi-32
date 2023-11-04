<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$created_at = date('Y-m-d H:i:s');

include 'koneksi.php';
mysqli_query($conn, "INSERT INTO `Customer`(`first_name`, `last_name`, `email`, `phone`)
VALUES('$first_name', '$last_name', '$email', '$phone'); ");

header("Location:index.php");
