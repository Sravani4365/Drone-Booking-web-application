<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "drones";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST["name"];
$email = $_POST["email"];
$date = $_POST["date"];
$duration = $_POST["duration"];
$location = $_POST["location"];
$sql = "INSERT INTO bookings (name, email, date, duration, location)
        VALUES ('$name', '$email', '$date', '$duration', '$location')";

if ($conn->query($sql) === TRUE) {
    echo "Drone booked successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>