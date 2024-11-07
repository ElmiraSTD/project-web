<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Қосылу
$conn = new mysqli($servername, $username, $password, $dbname);

// Қосылудың тексерілуі
if ($conn->connect_error) {
  die("Қосылу сәтсіз: " . $conn->connect_error);
}
echo "Қосылу сәтті!";
?>