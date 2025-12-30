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
$result = mysqli_query($conn, 
"SELECT tasks.*, contacts.name 
 FROM tasks 
 JOIN contacts ON tasks.contact_id = contacts.id");
?>

<table border="1">
<tr>
    <th>Contact</th><th>Task</th><th>Status</th><th>Action</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['task_name'] ?></td>
    <td class="<?= $row['status'] == 'Done' ? 'status-done' : 'status-pending' ?>">
    <?= $row['status'] ?>
</td>

    <td>
        <a href="update_task.php?id=<?= $row['id'] ?>"
   onclick="return confirm('Are you sure you want to mark this task as Done?');">
   Mark Done
</a>

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


