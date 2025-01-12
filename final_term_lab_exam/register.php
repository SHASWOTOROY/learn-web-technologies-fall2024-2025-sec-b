<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); 

    if (!empty($name) && !empty($contact) && !empty($username) && !empty($password)) {
        $stmt = $conn->prepare("INSERT INTO employee (name, contact, username, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $contact, $username, $password);
        $stmt->execute();
        echo "Admin registered successfully! <a href='login.php'>Login Here</a>";
    } else {
        echo "All fields are required!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Register Admin</title>
</head>
<body>
    <h2>Register as Admin</h2>
    <form method="POST" action="register.php">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="contact" placeholder="Contact" required><br>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>
