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
                //conditie als er is ingelogd + juiste username
                if (isset($_SESSION["inlognaam"]) && $_SESSION["loggedin"] == true) {
                    echo "<h2>Tweaking met , {$_SESSION['inlognaam']}!</h2>";
                
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
                    // Als er niet is ingelogd stuur het terug naar homepagina
                    header("Location: homepage.php");
                }
            ?>
    </div>

<?php

include "../includes/footer.php";