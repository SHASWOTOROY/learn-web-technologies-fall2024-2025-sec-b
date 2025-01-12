<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Include database connection
include 'db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script>
        // Function to search employees using Ajax
        function searchEmployee() {
            const query = document.getElementById('search').value;

            // Send request to search.php
            fetch(`search.php?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    let results = document.getElementById('results');
                    results.innerHTML = ''; // Clear previous results

                    if (data.length > 0) {
                        data.forEach(emp => {
                            results.innerHTML += `
                                <div>
                                    <p><b>ID:</b> ${emp.id} | <b>Name:</b> ${emp.name} | <b>Contact:</b> ${emp.contact}</p>
                                    <button onclick="editEmployee(${emp.id}, '${emp.name}', '${emp.contact}', '${emp.username}')">Edit</button>
                                    <button onclick="deleteEmployee(${emp.id})">Delete</button>
                                </div>
                            `;
                        });
                    } else {
                        results.innerHTML = '<p>No employees found.</p>';
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        // Function to populate the form for editing
        function editEmployee(id, name, contact, username) {
            document.getElementById('update-id').value = id;
            document.getElementById('update-name').value = name;
            document.getElementById('update-contact').value = contact;
            document.getElementById('update-username').value = username;
        }

        // Function to delete an employee
        function deleteEmployee(id) {
            if (confirm('Are you sure you want to delete this employee?')) {
                fetch(`delete.php?id=${id}`)
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        searchEmployee(); // Refresh the search results
                    })
                    .catch(error => console.error('Error:', error));
            }
        }
    </script>
</head>
<body>
    <h2>Welcome, Admin!</h2>
    <a href="logout.php">Logout</a>

    <h3>Search Employees</h3>
    <input type="text" id="search" placeholder="Search by name or contact" oninput="searchEmployee()">
    <div id="results"></div>

    <h3>Update Employee</h3>
    <form method="POST" action="update.php">
        <input type="hidden" id="update-id" name="id">
        <input type="text" id="update-name" name="name" placeholder="New Name"><br>
        <input type="text" id="update-contact" name="contact" placeholder="New Contact"><br>
        <input type="text" id="update-username" name="username" placeholder="New Username"><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
