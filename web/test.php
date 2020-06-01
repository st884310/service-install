<?php
include ('./config.php');
$sql = "SELECT * FROM user_message where name='amy'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $haha = "id: " . $row['id']. " - Name: " . $row['name']. " -age: " . $row['age']. " -phone:" .$row['phone']. "<br>";
	echo $haha;
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
