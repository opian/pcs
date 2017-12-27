<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		h1{
			text-align: center;
			color: skyblue;
			font-size: 3em;
		}
	</style>
</head>
<body>
<?php
	$add = $_GET["add"];
	$seriNoo = $_GET["seriNoo"];

	//session
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tahta";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO data (ad, seriNo)
	VALUES ('$add','$seriNoo')";

	if (mysqli_query($conn, $sql)) {
	    echo "<h1>Kişi ve Seri-No eklendi<h1>";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>

</body>
</html>
