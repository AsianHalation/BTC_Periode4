<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klant_id = $_POST['klant_id'];
}


function check_login() {

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
        // Simulate user login for demonstration (replace with real authentication)
        $username = $_POST["naam"];
        $password = $_POST["wachtwoord"];

        // Replace this with actual user verification (e.g., database query)
        if ($username == "admin" && $password == "1234") {
            $_SESSION["loggedin"] = true; // Set session variable
        } else {
            echo "Invalid login credentials.";
        }
    }

}