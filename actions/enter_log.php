<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hamlog";

$name = $_POST['name'];
$callsign = $_POST['callsign'];
$date = $_POST['date'];
$timesent = $_POST['timesent'];
$frequency = $_POST['frequency'];
$mode = $_POST['mode'];
$notes = $_POST['notes'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO logbook (name, callsign, date, timesent, frequency, mode, notes)
VALUES ('$name', '$callsign', '$date', '$timesent', '$frequency', '$mode', '$notes')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php"); /* Redirect browser */
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
