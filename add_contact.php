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

include 'db.php';
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    mysqli_query($conn, "INSERT INTO contacts VALUES ('', '$name', '$email', '$phone')");
    header("Location: contacts.php");
}
?>

<form method="post">
    <input name="name" placeholder="Name" required>
    <input name="email" placeholder="Email" required>
    <input name="phone" placeholder="Phone" required>
    <button>Add Contact</button>
</form>
</div>

