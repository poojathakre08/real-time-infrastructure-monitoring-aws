<?php

include 'config.php';

$id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM employees WHERE id=$id");

$row=mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{

$name=$_POST['name'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$department=$_POST['department'];

mysqli_query($conn,"UPDATE employees SET

name='$name',

email='$email',

phone='$phone',

department='$department'

WHERE id=$id");

header("Location:index.php");

}

?>

<html>

<body>

<form method="post">

<input type="text" name="name" value="<?php echo $row['name'];?>"><br><br>

<input type="email" name="email" value="<?php echo $row['email'];?>"><br><br>

<input type="text" name="phone" value="<?php echo $row['phone'];?>"><br><br>

<input type="text" name="department" value="<?php echo $row['department'];?>"><br><br>

<input type="submit" name="update" value="Update">

</form>

</body>

</html>
