<?php
    session_start();   
    include "../includes/db.php";
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
                while ($row = $result->fetch()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["naam"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["achternaam"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["telefoonnummer"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["emailadres"]) . "</td>";
                    echo "</tr>";
                }
            ?>
    </div>

<?php

include "../includes/footer.php";