<!DOCTYPE html>

<head>
<title>Antras puslapis</title>
<meta content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css.css" type="text/css" />
</head>

<body >
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

$result = mysqli_query($con,"SELECT * FROM Persons");

echo "<table border='1'>
<tr>
<th>Vardas</th>
<th>Pavarde</th>
<th>Adresas</th>
<th>Kiekis</th>
<th>Kaina</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</body>
</html>