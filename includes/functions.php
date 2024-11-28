<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klant_id = $_POST['klant_id'];
}


function check_login() {
$query = "SELECT * FROM tblRiddles WHERE Creator <> 'Admin' ";
$result = $conn->query($query);
}

$stmt = $pdo->query("SELECT * FROM tennisbtc.leden");
            $result = $stmt->fetchAll();

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['product_code'] . "</td>" . "<br>";
                echo "<td>" . $row['prijs_per_stuk'] . "</td>";
                echo "<td>" . $row['omschrijving'] . "</td>";
                echo "</tr>";
}