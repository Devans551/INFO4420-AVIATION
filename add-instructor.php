<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aviation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$uvuID = $_POST['uvuID'];
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];


$sql = "INSERT INTO instructors (`InstructorId`,`Name`,`Email`,`Phone`)
VALUES ('$uvuID', '$name', '$email', '$phoneNumber')";

//$prepare->bind_param($_POST['uvuID'], $_POST['name'], $_POST['email'], $_POST['phoneNumber']);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>