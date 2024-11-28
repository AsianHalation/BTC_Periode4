<?php
    session_start();   
    include "../includes/db.php";    
    include "../includes/functions.php";
    include "../includes/header.php";
    include "../includes/nav.php";
?>
<style>
    <?php
        include "../css/inlog.css";
    ?>
</style>

    <div class="content">
        <h2>Jesse</h2>
            <?php

                if (isset($_SESSION["inlognaam"]) && $_SESSION["wachtwoord"] == true) {
                    echo "<h2>Welcome, $username!</h2>";
                
                    $query = "SELECT * FROM leden WHERE naam <> 'emailadres' ";
                    $result = $conn->query($query);
                
                    echo "<table>";
                    echo "<tr><th>Naam</th><th>Achternaam</th><th>Telefoonnummer</th><th>Emailadres</th></tr>";
                    while ($row = $result->fetch()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["naam"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["achternaam"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["telefoonnummer"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["emailadres"]) . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    // If not logged in, show the login form
                    header("Location: homepage.php");
                }
            ?>
    </div>

<?php

include "../includes/footer.php";