<?php

require 'dbcon.php';

if (isset($_POST['query'])) {

$username = mysqli_real_escape_string($conn, $_POST['query']);

$sql = "SELECT * FROM users WHERE userName LIKE '%".$username."%'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<a href='userInfo.php?userID=".$row['userID']."'><li>".$row['userName']."</li></a>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();



} else {
  $conn->close();
}

?>