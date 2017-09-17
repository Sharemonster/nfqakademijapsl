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

		$qtybases = $_POST['qtybases'];
		$qtystems = $_POST['qtystems'];
		$qtytops = $_POST['qtytops'];
		?>

		<p>Thank you!</p>
		<p>Your order for:</p>

		<?php
		echo $qtybases.' bases<br>';
		echo $qtystems.' stems<br>';
		echo $qtytops.' tops<br>';
		$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connection was successfully established!";
}
		?>

		<p>was processed.</p>
	</body>
</html>