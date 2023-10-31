<?php
	$conn = new mysqli('localhost', 'limitless', 'l11mitless', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>