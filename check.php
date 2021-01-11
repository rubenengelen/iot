<?php

$naam = $_POST["username"];
$wachtwoord = $_POST["password"];

if($naam == "ruben" && $wachtwoord == "Hallo")
{
	header("Location: succes.html");
	exit();
}
else
{
	header("Location: index.html");
	exit();
}

exit();
?>