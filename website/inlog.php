<?php

session_start();
include "../includes/db.php";
include "../includes/functions.php";
include "../includes/header.php";
include "../includes/nav.php";

// Handle the login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["inlognaam"];
    $password = $_POST["wachtwoord"];

    // Validate login
    if (validate_login($username, $password, $conn)) {
        // Redirect to a protected page or dashboard after successful login
        header('location: homepage.php');
    } else {
        $error_message = "Invalid username or password.";
    }
}

?>

<style>
<?php
include "../css/inlog.css";
?>
</style>

<div class="content">
    <h2>Login</h2>
    <form method="post">
        <label for="inlognaam">Username</label>
        <input type="text" name="inlognaam" required>

        <label for="wachtwoord">Password</label>
        <input type="password" name="wachtwoord" required>

        <input type="submit" name="login" value="Log in">
    </form>

    <?php
    // Display error message if login fails
    if (!empty($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
</div>

<?php
include "../includes/footer.php";