<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tahta";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
	$deger = $_GET["serial"];
	$sql = "SELECT ad, seriNo FROM data WHERE seriNo=".$deger."";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {

	    echo "true";

	} else {
	    echo "false";
	}

	mysqli_close($conn);

?>