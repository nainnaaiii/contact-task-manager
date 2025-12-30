<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>
<h2>Admin Dashboard</h2>

<div class="nav vertical-nav">
    <a href="contacts.php"><i class="fa-solid fa-address-book"></i> Manage Contacts</a>
    <a href="add_task.php"><i class="fa-solid fa-circle-plus"></i> Assign Task</a>
    <a href="tasks.php"><i class="fa-solid fa-list-check"></i> View Tasks</a>
    <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
</div>
</div>
</div>
