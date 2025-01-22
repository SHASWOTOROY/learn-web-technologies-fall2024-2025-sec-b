<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "chat_tutorial");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch messages
$sql = "SELECT * FROM messages ORDER BY id DESC";
$result = $conn->query($sql);

while ($data = $result->fetch_assoc()) {
    echo "<b>" . htmlspecialchars($data['user_name']) . ":</b> ";
    echo "<p>" . htmlspecialchars($data['message_body']) . "</p>";
    echo "<span class='date'>[" . htmlspecialchars($data['date']) . "]</span> ";
    echo "<a href='delete.php?id=" . $data['id'] . "' style='color: red;'>[Delete]</a><br><br>";
}
?>
