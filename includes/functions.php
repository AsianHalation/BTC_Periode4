<?php

// Function to validate login credentials
function validate_login($username, $password, $conn) {
    // Prepare and execute the query to fetch the user by username
    $stmt = $conn->prepare("SELECT * FROM user WHERE inlognaam = :inlognaam AND wachtwoord = :password");
    $stmt->bindParam(':inlognaam', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Check if any row matches the provided credentials
    if ($stmt->rowCount() > 0) {
        $_SESSION["loggedin"] = true; // Set session variable
        $_SESSION["inlognaam"] = $username; // Optionally store the username
        return true;
    }
    return false;
}

// Function to check if user is logged in
function is_logged_in() {
    return isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true;
}

// Function to redirect user to a specific page
function redirect_to($url) {
    header("Location: " . $url);
    exit;
}
?>
