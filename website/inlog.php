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
            <form method="$_POST">
                <label for="naam">username</label>
                <input type="text" name="naam">

                <label for="wachtwoord">wachtwoord</label>
                <input type="password" name="wachtwoord">

                <input type="submit" name="login" value="Log in">
            </form>
    </div>

<?php

include "../includes/footer.php";