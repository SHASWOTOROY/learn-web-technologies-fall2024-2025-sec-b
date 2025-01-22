<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css?v=1.1">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($_GET['user']); ?></h1>
        <a href="logout.php" style="float: right; margin-right: 20px; color: #f4511e; text-decoration: none; font-size: 1rem;">Logout</a>
    </header>
    <div class="container">
        <form method="POST" name="chat_form" id="chat_form" <?php echo 'action="send.php?user=' . htmlspecialchars($_GET['user']) . '"'; ?>>
            <textarea name="message" id="message" placeholder="Write a Message"></textarea><br>
            <button type="submit">Send</button>
        </form>
        <div id="room" class="room">
            <?php include('fetch.php'); ?>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Prevent default form submission and use AJAX instead
            $('#chat_form').on('submit', function(e) {
                e.preventDefault();

                const message = $('#message').val();
                const actionUrl = $(this).attr('action');

                if (message.trim() !== "") {
                    $.ajax({
                        type: 'POST',
                        url: actionUrl,
                        data: $(this).serialize(),
                        success: function(response) {
                            $('#message').val(''); // Clear the textarea
                            $('#room').load('fetch.php'); // Refresh the chat room
                        },
                        error: function() {
                            alert('Failed to send message. Please try again.');
                        }
                    });
                } else {
                    alert('Message cannot be empty!');
                }
            });

            // Automatically refresh chat room every 500ms
            setInterval(() => {
                $('#room').load('fetch.php');
            }, 500);
        });
    </script>
</body>
</html>
