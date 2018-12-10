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
                        <a class="nav-link" href="inventory.php">Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reporting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="instructors.php"3>Instructors</a>
                    </li>
                </ul>
            </div>
			<div>
				<div data-role="main" class="ui-content">
					<a href="#assign" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ">Assign Books</a>
					<div data-role="popup" id="assign" class="ui-content" style="min-width:250px;">
					  <form method="post" action="/action_page_post.php">
						<div>
						  <h3>Assign Books</h3>
						  <label for="uvuID" class="ui-hidden-accessible">Instructor UVU ID:</label>
						  <input type="text" name="user" id="uvuID" placeholder="Instructor UVU #">
						  <label for="bookID" class="ui-hidden-accessible">Book ID</label>
						  <input type="int" name="bookID" id="bookID" placeholder="BookID">
						  <label for="quantity" class="ui-hidden-accessible">Quantity</label>
						  <input type="int" name="quantity" id="quantity" placeholder="Quantity">
						  <label for="date" class="ui-hidden-accessible">Date:</label>
						  <input type="date" name="date" id="date" >
          					<input type="submit" data-inline="true" value="Submit">
						</div>
					  </form>
					</div>
				</div>
            </div>
			<div>
				<div data-role="main" class="ui-content">
					<a href="#assign2" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ">Assign Shirts</a>
					<div data-role="popup" id="assign2" class="ui-content" style="min-width:250px;">
					  <form method="post" action="/action_page_post.php">
						<div>
						  <h3>Assign Shirts</h3> 
						  <label for="uvuID" class="ui-hidden-accessible">Instructor UVU ID:</label>
						  <input type="text" name="user" id="uvuID" placeholder="Instructor UVU #">
						  <label for="ShirtID" class="ui-hidden-accessible">Shirt Size</label>
						  <input type="int" name="shirtID" id="shirtID" placeholder="Shirt Size">
						  <label for="quantity" class="ui-hidden-accessible">Quantity</label>
						  <input type="int" name="quantity" id="quantity" placeholder="Quantity">
						  <label for="date" class="ui-hidden-accessible">Date:</label>
						  <input type="date" name="date" id="date" >
          					<input type="submit" data-inline="true" value="Submit">
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
					echo "ID: " . $row["InstructorId"]. "   |   Name: " . $row["Name"]. "   |   Email: " . $row["Email"]. "   |   Phone Number: " . $row["Phone"]. "<br><hr<";
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
			$username = "root";
			$password = "";
			$dbname = "aviation";

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
					echo "Book: " . $row["BookId"]. "   |   Instructor: " . $row["InstructorId"]. "   |   Shirt: " . $row["ShirtId"]. "   |   Issued Date: " . $row["IssuedDate"]. "<br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
	</div>
	<div class="col-md-6">
		<h2>Items Issued</h2>
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

			$sql = "SELECT  InstructorName, ritem, rdate FROM report";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "Instructor: " . $row["InstructorName"]. "   |   Date: " . $row["rdate"]. "   |   Item: " . $row["ritem"]. "<br>";
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