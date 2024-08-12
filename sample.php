<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
		<h1>My Final Test!</h1>
		<p></p>

		<?php
		$connection_string = "host=RDS_Connection_String port=RDS_Port_Number dbname=RDS_DB_Name user=RDS_Username password=RDS_password";
		$connection = pg_connect($connection_string) or die("Could not connect to the database: " . pg_last_error());


		$query = "SELECT * FROM final";
		$result = pg_query($connection, $query) or die("Error reading data: " . pg_last_error());

		while ($row = pg_fetch_assoc($result)) {
			echo "ID: " . $row['id'] . ", First Name: " . $row['fname'] . ", Last Name: " . $row['lname'] . ", Timestamp: " . $row['created_at'] . "\n";
		}

		?>

    </body> 
</html>