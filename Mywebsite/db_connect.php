<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pixiv_like";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch images from the database
$sql = "SELECT * FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="item">';
    echo '<img src="' . $row["src"] . '" alt="' . $row["alt"] . '">';
    echo '</div>';
  }
} else {
  echo "0 results";
}

$conn->close();

?>