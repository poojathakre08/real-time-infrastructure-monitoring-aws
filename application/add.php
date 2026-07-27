<?php
include 'config.php';

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$department=$_POST['department'];

mysqli_query($conn,"INSERT INTO employees(name,email,phone,department)
VALUES('$name','$email','$phone','$department')");

header("Location:index.php");

}
?>

<html>

<head>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<h2>Add Employee</h2>

<form method="post">

<input type="text" name="name" placeholder="Name" required><br><br>

<input type="email" name="email" placeholder="Email" required><br><br>

<input type="text" name="phone" placeholder="Phone" required><br><br>

<input type="text" name="department" placeholder="Department" required><br><br>

<input type="submit" name="submit" value="Save">

</form>

</body>

</html>
