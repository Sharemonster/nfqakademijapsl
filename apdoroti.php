<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Acme Widget Company</title>
	</head>
	<body style="font-family: Arial">
		<h1><br>
		Acme Widget Company</h1>
		<p>&nbsp;</p>

		<?php
		$url = getenv('JAWSDB_URL');
		$dbparts = parse_url($url);

		$hostname = $dbparts['host'];
		$username = $dbparts['user'];
		$password = $dbparts['pass'];
		$database = ltrim($dbparts['path'],'/');

		$vardas = $_POST['vardas'];
		$pavarde = $_POST['pavarde'];
		$adresas = $_POST['adresas'];
		$kiekis = $_POST['kiekis'];
		$a = mt_rand(10000000000, 99999999999)
		?>

		<p>Aciu,</p>
		<p>kad perkate</p>

		<?php
		echo $vardas.' eur<br>';
		$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Nepavyko: " . $conn->connect_error);
}
else{
echo "Pavyko";
}
$sql = "INSERT INTO uzsakymai (id, vardas, pavarde, adresas, kiekis)
VALUES ('$id', '$vardas', '$pavarde', '$adresas', '$kiekis')";

if ($conn->query($sql) === TRUE) {
    echo "Prideta";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
		?>

		<p>was processed.</p>
	</body>
</html>