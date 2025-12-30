<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';

if (!isset($_GET['id'])) {
    die("No contact ID provided");
}

$id = $_GET['id'];

$query = "DELETE FROM contacts WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: contacts.php");
    exit();
} else {
    echo "Error deleting contact";
}
