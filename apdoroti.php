<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Apdorotas uzsakymas</title>
	</head>
	<body class="center">

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
		$kaina =  $kiekis*12578631;
		?>

		<p>Aciu,</p>
		<p>kad perkate</p>

		<?php
			echo $kaina.' eur<br>';
			$conn = new mysqli($hostname, $username, $password, $database);

			if ($conn->connect_error) {
    			die("Nepavyko: " . $conn->connect_error);
			}
			else{
				echo "Pavyko";
			}
			$sql = "INSERT INTO uzsakymai (vardas, pavarde, adresas, kiekis)
			VALUES ('$vardas', '$pavarde', '$adresas', '$kiekis')";

			if ($conn->query($sql) === TRUE) {
 		    	echo "Prideta";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		?>
	</body>
</html>