<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($conn, "DELETE FROM employees WHERE id=$id");

    header("Location: index.php");
    exit();
} else {
    echo "No ID received.";
}
?>
