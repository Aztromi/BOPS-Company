<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$address = $_POST['address'];
		$birthdate = $_POST['birthdate'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];
		$position = $_POST['position'];
		$schedule = $_POST['schedule'];
		


		$enc_pass= md5(md5($pass1));
		$sql = "UPDATE employees SET firstname = '$firstname', 
		                             lastname = '$lastname',
									 username = '$username',
									 password = '$enc_pass',
									 address = '$address', 
									 birthdate = '$birthdate', 
									 contact_info = '$contact', 
									 gender = '$gender', 
									 position_id = '$position', 
									 schedule_id = '$schedule' 
									 WHERE id = '$empid'";
		if($conn->query($sql)){

			$_SESSION['success'] = 'Employee updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select employee to edit first';
	}

	header('location: employee.php');
?>