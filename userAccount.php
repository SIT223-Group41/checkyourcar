<?php
session_start();
include('connect.php');
$errors   = array();
$username=$password=$password_1=$password_2=$email=$fullname=$address=$phone=$VIN='';
//Register
if (isset($_POST['register_user'])) {

	$username   = $_POST['username'];
	$email	    = $_POST['email'];
	$password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $fullname   = $_POST['fullname'];
    $address    = $_POST['address'];
    $phone      = $_POST['phone'];
    $VIN        = $_POST['VIN'];

	// checking filled data
	if (empty($username)) { 
		array_push($errors, "Username is required");
	}

	if (empty($email)) {
		array_push($errors, "Email is required");
	}

	if ($password_1 != $password_2) {
		array_push ($errors, "Password typed doesn't match");
	} 

	if (empty($password_1)) {
		array_push($errors, "Password is required");
	}

    if (empty($fullname)) {
		array_push($errors, "Full name is required");
    }

    if (empty($address)) {
		array_push($errors, "Address is required");
    }

    if (empty($phone)) {
		array_push($errors, "Phone is required");
    }

    if (empty($VIN)) {
		array_push($errors, "VIN is required");
    }
    
	$user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
	$result = mysqli_query($mysqli, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	// Checking whether user is in database or not
	if ($user) {
		if ($user['username'] === $username) {
			array_push($errors, "Username has already existed");
		}

		if ($user['email'] === $email) {
			array_push($errors, "Email has already existed");
		}
	}

	// Inserting new user
	if (count($errors) == 0) {
		$password = $password_1;

		$query = "INSERT INTO user (username, password, email, fullname, address, phone, VIN) 
        VALUES ('$username', '$password','$email','$fullname','$address','$phone','$VIN')";
		mysqli_query($mysqli, $query);
		$_SESSION['username'] = $username;
		header('location: index.php');
	}

}

// Login
if (isset($_POST['login_user'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username)) {
		array_push($errors, "Username is required");
	}

	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = $password;

		$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$results = mysqli_query($mysqli, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
            header('location: index.php');
		} else {
			array_push($errors, "Invalid username and/or password");
		}
	}
}

?>
