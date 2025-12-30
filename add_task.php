<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';

$contacts = mysqli_query($conn, "SELECT * FROM contacts");

if (isset($_POST['submit'])) {
    $contact_id = $_POST['contact_id'];
    $task_name = $_POST['task_name'];

    mysqli_query(
        $conn,
        "INSERT INTO tasks (contact_id, task_name, status)
         VALUES ('$contact_id', '$task_name', 'Pending')"
    );

    header("Location: tasks.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <div class="container">
    <title>Assign Task</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Assign Task to Contact</h2>

<form method="post">
    <select name="contact_id" required>
        <option value="">-- Select Contact --</option>
        <?php while ($row = mysqli_fetch_assoc($contacts)) { ?>
            <option value="<?= $row['id'] ?>">
                <?= $row['name'] ?>
            </option>
        <?php } ?>
    </select>
    <br><br>

    <input type="text" name="task_name" placeholder="Enter task" required>
    <br><br>

    <button type="submit" name="submit">Assign Task</button>
</form>

<div class="back-link">
    <a href="dashboard.php">
        <button>← Back to Dashboard</button>
    </a>
</div>

        </div>
</body>
</html>
