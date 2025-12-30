<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "", "contact_task_db");

if (!$conn) {
    die("Database connection failed");
}
