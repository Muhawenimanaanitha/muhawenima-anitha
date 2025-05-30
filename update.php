<?php require_once 'connect.php'; ?>

<?php
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM L4NIT WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form method="POST">
        First Name: <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" required><br><br>
        Last Name: <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        <input type="submit" name="update" value="Update Student">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];

        $sql = "UPDATE L4NIT SET firstname='$fname', lastname='$lname', email='$email' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Student updated successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
