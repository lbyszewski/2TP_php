<?php
// Połączenie z bazą danych
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nazwa_bazy_danych";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzanie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Zapytanie SQL
$sql = "SELECT * FROM nazwa_tabeli ORDER BY kolumna_do_sortowania";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Wyświetlanie danych w formie uporządkowanej listy
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["kolumna1"] . " - " . $row["kolumna2"] . "</li>"; // Zastąp kolumna1, kolumna2 itd. odpowiednimi nazwami kolumn z tabeli
    }
    echo "</ul>";
} else {
    echo "Brak danych";
}

// Zamykanie połączenia
$conn->close();
?>
