<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<title>Live search box | Using JavaScript & JQuery</title>
</head>
<body>
<div id="wrapper">

	<div id="main">

<?php

	if (isset($_GET['userID'])) {
		require 'core/dbcon.php';

		$userID = $_GET['userID'];

		$sql = "SELECT * FROM users WHERE userID=$userID";


	  $result = $conn->query($sql);

	  if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo "<div id='headline'>Info about <b>".$row['userName']."</b></div>";
	      echo "UserID: ".$row['userID']."<br> Name: ".$row['userName']."<br> Age: ".$row['userAge']."<br> Location: ".$row['userLoc'];
	    }
	  } else {
	    echo "Error";
	  }

	  $conn->close();

	} else {
		$conn->close();
	}

?>

	</div>

</div>
</body>
</html>