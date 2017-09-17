<!DOCTYPE html>

	<head>
		<title>Antras puslapis</title>
		<meta content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="css.css" type="text/css" />
	</head>

	<body class="bg spacetop">

 		<div class="navbar">
  			<a href="index.php">Index</a>
  			<a href="notindex.php">Not Index</a>
		</div>

		<?php
			$url = getenv('JAWSDB_URL');
			$dbparts = parse_url($url);

			$hostname = $dbparts['host'];
			$username = $dbparts['user'];
			$password = $dbparts['pass'];
			$database = ltrim($dbparts['path'],'/');

			$conn = new mysqli($hostname, $username, $password, $database);

			if ($conn->connect_error) {
    			die("Nepavyko: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM uzsakymai";
			$result = $conn->query($sql);

			echo "<table border='1'>
				<tr>
				<th>Vardas</th>
				<th>Pavarde</th>
				<th>Adresas</th>
				<th>Kiekis</th>
			</tr>";

			while($row = $result->fetch_assoc()){
				echo "<tr>";
				echo "<td>" . $row['vardas'] . "</td>";
				echo "<td>" . $row['pavarde'] . "</td>";
				echo "<td>" . $row['adresas'] . "</td>";
				echo "<td>" . $row['kiekis'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysqli_close($con);
		?>
	</body>
</html>