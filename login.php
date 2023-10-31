<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$voter = $_POST['voter'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM voters WHERE voters_id = '$voter'";
		$query = mysqli_query($conn, $sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'ID akun voter salah';
		}
		else{
			$row = mysqli_fetch_assoc($query);
			if(true){
				$_SESSION['voter'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Kata sandi salah';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input voter credentials first';
	}

	header('location: index.php');

?>