<?php
// Predefined username and password
$validUsername = "admin";
$validPassword = "password123";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve username and password from the form
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Validate credentials
    if ($username === $validUsername && $password === $validPassword) {
        echo "<h1>Login Successful</h1>";
    } else {
        echo "<h1>Invalid Credentials</h1>";
    }
} else {
    // Redirect to login form if the script is accessed directly
    header("Location: login.html");
    exit();
}
?>
