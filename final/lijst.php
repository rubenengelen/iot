<?php
$servername = "localhost";
$username = "student_11901558";
$password = "tUrMEpCrgY0O";
$dbname = "student_11901558";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, waarde, tijd FROM data_iot WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $waarde, $tijd);

while($row = $stmt->fetch())
{
	echo "<table>";
	echo "<tr>";
	echo "<th>id</th>";
	echo "<td>" . $id . "</td>";
	echo "<th>tijd</th>";
	echo "<td>" . $tijd . "</td>";
	echo "<th>waarde</th>";
	echo "<td>" . $waarde . "</td>";
	echo "</tr>";	
}
echo "</table>";
$stmt->close();


?>