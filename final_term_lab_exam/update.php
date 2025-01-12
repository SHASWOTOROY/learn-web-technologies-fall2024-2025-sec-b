<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];

    $stmt = $conn->prepare("UPDATE employee SET name=?, contact=?, username=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $contact, $username, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Employee updated successfully! <a href='dashboard.php'>Go Back</a>";
    } else {
        echo "No changes made or invalid data.";
    }
}
?>
