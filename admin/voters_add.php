<?php
include 'includes/session.php';

if (isset($_POST['add'])) {
	$fullname = $_POST['fullname'];
	$kelompok = $_POST['kelompok'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	// $filename = $_FILES['photo']['name'];
	// if(!empty($filename)){
	// 	move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
	// }
	//generate voters id
	$set = '123456789';
	$voter = substr(str_shuffle($set), 0, 2);
	$nv = $fullname;


	$sql = "INSERT INTO voters (voters_id, password, fullname,kelompok) VALUES ('$nv', '$password', '$fullname','$kelompok')";
	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Voter added successfully';
	} else {
		$_SESSION['error'] = $conn->error;
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: voters.php');
