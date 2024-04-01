<?php
$servername = "localhost";
$username = "root";
$dbname = "database1"; // Change this to your desired database name

// Create connection
$conn = new mysqli($servername, $username, '', $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email= $_POST["email"];
    $collage = $_POST["collage"];
    
    // SQL to insert username and email into the table
    $sql = "INSERT INTO users (username, email, collage) VALUES ('$username', '$email', '$collage')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close connection
    $conn->close();
}
?>
