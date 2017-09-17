<!DOCTYPE html>
<body>

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

$sql = "DELETE FROM uzsakymai WHERE 0==0";
if ($conn->query($sql) !== TRUE) {
 		    	echo "Error: " . $sql . "<br>" . $conn->error;
			}
</body>
</html>
