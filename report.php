<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reporting Page</title>
</head>

<body>
    <!-- Just an image -->
    <nav class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
                <img src="images/UVUSquareWhite-0003.png" width="68" height="60" class="d-inline-block align-middle"
                    alt="">
                Aviation
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inventory.html">Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reporting</a>
                    </li>
                </ul>
            </div>
        </nav> 
    </nav>
	
	All of the reports!
	<div class="col-md-6">
		<h2>Book Report</h2>
		<?php
			$servername = "localhost";
			$username = "username";
			$password = "password";
			$dbname = "myDB";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT BookId, Title, NumCopies FROM Book";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "id: " . $row["BookId"]. " - Title: " . $row["Title"]. "Copies: " . $row["NumbCopies"]. "<br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
	</div>
	<div class="col-md-6">
		<h2>Shirt Report</h2>
		<?php
			$servername = "localhost";
			$username = "username";
			$password = "password";
			$dbname = "myDB";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT ShirtId, Size, NumSize FROM Shirt";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "id: " . $row["Shirtid"]. " - Size: " . $row["Size"]. "Amount: " . $row["NumSize"]. "<br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
	</div>
	<div class="col-md-6">
		<h2>Instructors</h2>
		<?php
			$servername = "localhost";
			$username = "username";
			$password = "password";
			$dbname = "myDB";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT InstructorId, Name, Email, Phone, ShirtSize FROM Instructors";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "id: " . $row["InstructorId"]. " - Name: " . $row["Name"]. "Email: " . $row["Email"]. "Phone Number: " . $row["Phone"]. "Shirt Size: " . $row["ShirtSize"]. "<br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
	</div>
	<div class="col-md-6">
		<h2>Issued</h2>
		<?php
			$servername = "localhost";
			$username = "username";
			$password = "password";
			$dbname = "myDB";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT IssuedId, BookId, InstructorId, ShirtId, IssuedDate FROM Issued";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "id: " . $row["IssuedId"]. " - Book: " . $row["BookID"]. "Instructor: " . $row["InstructorId"]. "Shirt: " . $row["ShirtId"]. "Issued Date: " . $row["IssuedDate"]. "<br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>