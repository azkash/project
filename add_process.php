<?php
include "connect.php";

$nama = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

mysqli_query($con,"insert into contact values('','$nama','$email','$message')");
header("location: contact.php")
?>