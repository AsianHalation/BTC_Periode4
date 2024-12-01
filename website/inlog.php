<?php

session_start();
include "../includes/db.php";
include "../includes/functions.php";
include "../includes/header.php";
include "../includes/nav.php";

//Form check is de form is ingevuld
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["inlognaam"];
    $password = $_POST["wachtwoord"];

    // Validate login
    if (logincheck($username, $password, $conn)) {
        //als er succesvol is ingelogd dan verwijst het naar de homepagina
        header('location: homepage.php');
    } else {
        $error = "Invalid username or password.";
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
    //echo de error variabele uit de if else statement van de logincheck functie
    if (!empty($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    ?>
</div>

<?php
include "../includes/footer.php";