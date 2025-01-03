<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Room</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="chat-container">
        <h1>Chat Room</h1>
        
        <!-- Display the chat messages -->
        <div id="messages" class="message-box"></div>
        
        <!-- Message input form -->
        <div class="input-container">
            <input type="text" id="message-input" placeholder="Type your message..." required>
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script src="scripts/app.js"></script>
</body>
</html>

<?php
// Start session to access the username
session_start();

// Redirect to the index page if the username is not set
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
?>
