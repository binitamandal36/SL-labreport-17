<!-- 4.Question:
 1. Create a script that asks the user for their name and stores it in a session
variable upon form submission.
2. If the user’s name is not in the session, display a form to ask for their name.
3. Use a cookie to remember if the user has previously visited the site. On
subsequent visits, greet them with a message like: "Welcome back, [Name]! It’s
great to see you again!" -->

<?php
// Start the session
session_start();

// Set cookie duration (e.g., 30 days)
$cookieDuration = 30 * 24 * 60 * 60;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])) {
    // Store the user's name in the session
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
    
    // Set a cookie to remember the user
    setcookie('visited', htmlspecialchars($_POST['name']), time() + $cookieDuration);
    header("Location: " . $_SERVER['PHP_SELF']); // Reload to reflect changes
    exit();
}

// Check if the user has previously visited
$visitedName = isset($_COOKIE['visited']) ? $_COOKIE['visited'] : null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php if (isset($_SESSION['name'])): ?>
        <!-- Display greeting for logged-in user -->
        <h1>Welcome, <?= $_SESSION['name']; ?>!</h1>
        <p>It's great to see you again!</p>
    <?php elseif ($visitedName): ?>
        <!-- Display greeting for returning user -->
        <h1>Welcome back, <?= $visitedName; ?>!</h1>
        <p>It’s great to see you again!</p>
    <?php else: ?>
        <!-- Display form to ask for the user's name -->
        <form method="POST" action="">
            <label for="name">What is your name?</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Submit</button>
        </form>
    <?php endif; ?>
</body>
</html>
