<main>
    <div class="navigation">
        <nav>
            <a href="homepage.php">Home</a>
            <a href="inlog.php">login</a>
            <?php
                if (isset($_SESSION["inlognaam"]) && $_SESSION["wachtwoord"] == true) {
                    echo "<a href='print.php'>rooster en leden</a>";
                    echo "<a href='../includes/logout.php'>Uitloggen</a>";
                }
            ?>
    </div>