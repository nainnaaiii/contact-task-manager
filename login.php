<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $ADMIN_EMAIL = "admin@gmail.com";
    $ADMIN_PASSWORD = "admin123";

    if ($email === $ADMIN_EMAIL && $password === $ADMIN_PASSWORD) {
    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
    exit();
}
     else {
        echo "Invalid login!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
    <input type="email" name="email" placeholder="Admin Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
</div>

</body>
</html>
