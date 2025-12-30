<?php
include 'db.php';
$id = $_GET['id'];
mysqli_query($conn, "UPDATE tasks SET status='Done' WHERE id=$id");
header("Location: tasks.php");
