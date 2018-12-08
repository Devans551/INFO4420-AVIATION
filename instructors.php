<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>Instructors Page</title>
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
                        <a class="nav-link" href="report.php">Reporting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Instructors</a>
                    </li>
                </ul>
            </div>
			<div>
				<div data-role="main" class="ui-content">
					<a href="#addInstructor" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ">Add Instructor</a>
					<div data-role="popup" id="addInstructor" class="ui-content" style="min-width:250px;">
					  <form method="post" action="/aviation/add-instructor.php">
						<div>
						  <h3>Add Instructor</h3>
						  <label for="uvuID" class="ui-hidden-accessible">Instructor UVU ID:</label>
						  <input type="text" name="uvuID" id="uvuID" placeholder="UVU #">
						  <label for="name" class="ui-hidden-accessible">Name:</label>
						  <input type="text" name="name" id="name" placeholder="Name">
						  <label for="email" class="ui-hidden-accessible">Email:</label>
						  <input type="text" name="email" id="email" placeholder="Email">
						  <label for="phoneNumber" class="ui-hidden-accessible">Phone Number:</label>
						  <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
          					<input type="submit" data-inline="true" id="submit" value="Submit">
						</div>
						  
					  </form>
					</div>
				</div>
            </div>
        </nav> 
    </nav>
	
	<div class="col-md-6">
		<h2>Instructors</h2>
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

			$sql = "SELECT InstructorId, Name, Email, Phone FROM Instructors";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "id: " . $row["InstructorId"]. "   |   Name: " . $row["Name"]. "   |   Email: " . $row["Email"]. "   |   Phone Number: " . $row["Phone"]. "<br>";
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