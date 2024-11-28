        <div class="footer">
            <h2>Einde van jesse</h2>
            <label class="welcome">
            <?php
            if(isset($_SESSION['inlognaam'])) {
                echo 'Welcome ' . $_SESSION['inlognaam'];
            }
            ?>
            </label>

        </div>
    </main>
</html>