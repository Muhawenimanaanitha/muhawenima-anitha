<?php require_once 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
</head>
<body>
    <h2>Student List</h2>
    <a href="index.php">Back to Home</a><br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Created</th><th>Actions</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM L4NIT");

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['firstname']}</td>
                    <td>{$row['lastname']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['created_at']}</td>
                    <td>
                        <a href='update.php?id={$row['id']}'>Edit</a> |
                        <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Are you sure?')\">Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
