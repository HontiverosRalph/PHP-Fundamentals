<?php 

session_start();

// Check if login button was clicked
if (isset($_POST['loginBtn'])) {
    // Check if the user is already logged in
    if (isset($_SESSION['username'])) {
        // User is already logged in
        $_SESSION['message'] = $_SESSION['username'] . " is already logged in. Wait for them to logout first.";
        header('Location: index.php');
        exit(); // Always good to use exit after header redirect
    }

    // Get the username from the form input
    $username = $_POST['username'];

    // Get the password and hash it
    $userPassword = md5($_POST['userPassword']);

    // Set session variables
    $_SESSION['username'] = $username;
    $_SESSION['userPassword'] = $userPassword;

    // Redirect back to index.php
    header('Location: index.php');
    exit();
}

// Check if logout button was clicked
if (isset($_POST['LogoutBtn'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}

?>
