<?php

$conn = mysqli_connect("localhost", "root", "", "chat_tutorial");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM messages WHERE id = $id";
    mysqli_query($conn, $sql);
}

header("Location: index.php?user=" . $_GET['user']);
mysqli_close($conn);
?>
