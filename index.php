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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Hotel - Welcome</title>
    <link rel="stylesheet" href="./index.css"> 
</head>
<body>
    <header>
        <h1>Welcome to My Hotel</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

   
    <main>
        
    </main>


    <footer>
        <p>&copy; 2024 My Hotel. All rights reserved.</p>
    </footer>

</body>
</html>

