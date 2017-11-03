<pre>
<?php 
	$host =  'localhost';
	$user = 'root';
	$pass = '';
	$db = 'php_crm';

	$mysqli = new mysqli( $host, $user, $pass, $db );

	$sql = "SELECT * FROM  customer_info";

	$query = $mysqli->query( $sql );

	while($row = $query->fetch_assoc()){
		print_r($row);
	}

 ?>