
<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
$result = mysqli_query($conn, "SELECT * FROM contacts");
?>

<h2>Contacts</h2>
<a href="add_contact.php">Add Contact</a>

<table border="1">
<tr>
    <th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['phone'] ?></td>
    <td>
        <a href="delete_contact.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
<div class="back-link">
    <a href="dashboard.php">
        <button>← Back to Dashboard</button>
    </a>
</div>
</div>
