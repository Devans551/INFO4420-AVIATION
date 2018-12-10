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
    <title>Inventory Page</title>
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
                        <a class="nav-link" href="#">Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="report.php">Reporting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="instructors.php">Instructors</a>
                    </li>
                </ul>
            </div>
            <div>
				<div data-role="main" class="ui-content">
					<a href="#addInventory" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ">Add Items</a>
					<div data-role="popup" id="addInventory" class="ui-content" style="min-width:250px;">
					  <form method="post" action="/aviation/add-new-item.php">
						<div>
						  <h3>Item to add information</h3> 
						  <label for="itemID" class="ui-hidden-accessible">Item Name:</label>
						  <input type="text" name="itemID" id="itemID" placeholder="Item Name">
						  <label for="quantity" class="ui-hidden-accessible">Quantity:</label>
						  <input type="number" name="quantity" id="quantity" placeholder="Quantity">
          					<input type="submit" data-inline="true" value="Submit">
						</div>
					  </form>
					</div>
				</div>	
                
				<div data-role="main" class="ui-content">
					<a href="#updateInventory" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ">Update Quantities</a>
					<div data-role="popup" id="updateInventory" class="ui-content" style="min-width:250px;">
					  <form method="post" action="/aviation/update-item.php">
						<div>
						  <h3>Item to update information</h3>
						  <label for="updateID" class="ui-hidden-accessible">Item ID:</label>
						  <input type="text" name="updateID" id="updateID" placeholder="Item #">
						  <label for="amount" class="ui-hidden-accessible">Quantity:</label>
						  <input type="number" name="amount" id="amount" placeholder="New Quantity">
          					<input type="submit" data-inline="true" value="Submit">
						</div>
					  </form>
					</div>
				</div>	
            </div>
        </nav>
    </nav>
		<div class="col-md-10">
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

			$sql = "SELECT  itemID, itemName, quantity FROM items";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<strong>Item ID:</strong> " . $row["itemID"]. "     |      <strong>Item Name:</strong> " . $row["itemName"]. "      |      <strong>Quantity:</strong> " . $row["quantity"]. "<br><hr><br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
	</div>
<!--
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Item</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Shirts</td>
                <td>45</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Wings</td>
                <td>20</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Hats</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>
-->
    <footer>
        <div class="d-flex p-2 bd-highlight"></div>
    </footer>
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