<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "chat_tutorial");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the username and message
$user = isset($_GET['user']) ? $conn->real_escape_string($_GET['user']) : '';
$message = isset($_POST['message']) ? $conn->real_escape_string($_POST['message']) : '';

if (!empty($user) && !empty($message)) {
    $date = date("D M Y g a");
    $sql = "INSERT INTO messages (user_name, date, message_body) VALUES ('$user', '$date', '$message')";
    $conn->query($sql);
}

// Redirect back to the chat page
header("Location: index.php?user=$user");
exit;
?>
