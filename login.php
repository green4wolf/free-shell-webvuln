<?php
// Path to the users file
$usersFilePath = 'users.txt';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Read user data from the file
    $users = file($usersFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($users as $user) {
        list($storedUsername, $hashedPassword) = explode(':', $user);

        // Verify username and password
        if ($username === $storedUsername && password_verify($password, $hashedPassword)) {
            // Successful login
            header("Location: uhdfiudfiufifudhfuhfuhfuisfbisbfjdfd.html");
            exit();
        }
    }

    // Invalid login
    header("Location: salah.html");
    exit();
}
?>
