<?php 
$servername = "localhost";
$username = "student_11901558";
$password = "tUrMEpCrgY0O";
$dbname = "student_11901558";

$id = $_GET["id"];
$waarde = $_GET["waarde"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO data_iot (id, waarde, tijd) VALUES ($id, $waarde, now())";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully!" . "<br>" . "id is $id" . "<br>" . "waarde is $waarde";
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error . "<br>" . "id is $id" . "<br>" . "waarde is $waarde";
}
$conn->close();
?>