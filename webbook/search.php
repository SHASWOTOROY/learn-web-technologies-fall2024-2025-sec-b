<?php
    include 'profile.php';
    $search=$_POST['search'];
    $query = $conn ->query("SELECT * FROM users_info WHERE first_name LIKE '%$search%' LIMIT 5 ")
    if ($query->num_rows > 0) {
        while ($user = mysqli_fetch_assoc($query)) {
            echo '
            <div class="user">
                <div class="user_image" style="background-image: url(' . $user['image'] . ');"></div>
                <p class="user_name">' . $user['first_name'] . '</p>
            </div>';
        }
    } else {
        echo '<p class="no_users">No users found!</p>';
    }
    
?>