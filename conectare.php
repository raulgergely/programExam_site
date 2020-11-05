<?php
$server="localhost";
$user="root";
$parola="";
$database="an 1 is";
$conn = mysqli_connect("localhost", "root", "", $database);
if (!$conn) {
    echo "Eroare: Nu a fost posibilă conectarea la MySQL." . PHP_EOL;
    echo "Valoarea errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Valoarea error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>

