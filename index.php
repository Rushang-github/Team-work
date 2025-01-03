<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Chat</h1>
        <form method="POST" action="">
            <label for="username">Enter Your Username:</label><br>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <br><br>
            <button type="submit">Start Chat</button>
        </form>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?= $error ?></p>
        <?php endif; ?>
    </div>
    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Save username to session
        $username = trim($_POST['username']);
        if (!empty($username)) {
            $_SESSION['username'] = htmlspecialchars($username);
            header('Location: chat.php');
            exit;
        } else {
            $error = "Username is required!";
        }
    }
    ?>
</body>
</html>
