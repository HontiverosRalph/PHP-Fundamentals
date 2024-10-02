<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="handleForm.php" method="POST">
        <p><input type="text" placeholder="Username here" name="username"></p>
        <p><input type="password" placeholder="Password here" name="userPassword"></p>
        <p><input type="submit" value="Login" name="loginBtn"></p>
        <p><input type="submit" value="Logout" name="LogoutBtn"></p>
    </form>

    <?php 
    // Display any login message
    if (isset($_SESSION['message'])) {
        echo '<h2>' . htmlspecialchars($_SESSION['message']) . '</h2>';
        unset($_SESSION['message']); // Clear the message after displaying it
    } else {
        // Display user information only if logged in
        if (isset($_SESSION['username'])) { ?>
            <h2>User logged in: <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
            <h2>User password: <?php echo htmlspecialchars($_SESSION['userPassword']); ?></h2>
        <?php }
    }
    ?>
</body>
</html>
