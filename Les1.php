<html>
<body>
<head>
	<title> <?php echo $_POST["titel"]; ?></title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  height: <?php echo $_POST["hoogte"];?>px;
  width: <?php echo $_POST["breedte"];?>px;
}
</style>
<table>
	<tr>
	    <tr>
		 <th>Getallen</th>
		 <th>Naam</th>
	    </tr>
	</tr>
	<tr>
	    <td>1</td>
	    <td><?php echo $_POST["naam"];?></td>
	</tr>
	<tr>
	    <td>2</td>
	    <td><?php echo $_POST["email"];?></td>
</table>		
Welkom <?php echo $_POST["naam"]; ?><br>
Uw email adres is: <?php echo $_POST["email"]; ?><br>
<?php $color = $_POST["kleur"] ?>
<?php 
  	if($color == 'geel')
	{
		echo '<body style="background-color:yellow">';
  	} 	
	elseif($color == 'blauw')
	{
		echo '<body style="background-color:blue">';
  	} 
	elseif($color == 'oranje')
	{
		echo '<body style="background-color:orange">';
  	}
	elseif($color == 'rood')
	{
		echo '<body style="background-color:red">';
  	}


?>
</body>
</html>