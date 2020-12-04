<?php
$servername = "localhost";
$username = "student_11901558";
$password = "tUrMEpCrgY0O";
$dbname = "student_11901558";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
$input = $_POST["waarde"];
$sql = "INSERT INTO Sensoren(id, Naam)
VALUES ('AUTO_INCREMENT', '$input')";

if($conn->query($sql) === TRUE)
{
	echo "New record created succesfully";
} else
{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>