<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Username tidak ditemukan atau tidak ada';
		}
		else{
			$row = $query->fetch_assoc();
			if(true){
				$_SESSION['admin'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Kata sandi salah';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	header('location: index.php');

?>