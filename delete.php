<?php require_once 'connect.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM L4NIT WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: view.php");
        exit();
    } else {
        echo "Error deleting student: " . $conn->error;
    }
}
?>
