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

$prepare = $mysqli->prepare("INSERT INTO `instructors`(`InstructorID`,`Name`,`Email`,`Phone`) VALUES (?,?,?,?)");

$prepare->bind_param("ssssssssss", $_POST['uvuID'], $_POST['name'], $_POST['email'], $_POST['phoneNumber']);

$prepare->execute();
$mysqli->close();
?>