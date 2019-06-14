<?php
	$firstname = $_POST["firstname"]; 
	$lastname = $_POST["lastname"];
	$email = $_POST["email"]; 
	$password = $_POST["password"]; 
	$c_password = $_POST["c_password"];
	$mf = $_POST["mf"]; 
	$dob = $_POST["dob"];
	$country = $_POST["country"];

	if(!isset($firstname))
	{
		die("firstname wasn't submitted !");
	}
	if(empty($firstname))
	{
		die("Empty firstname !");
	}

	if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
	{
        die("Only letters and white space allowed"); 
    }

    if(!isset($lastname))
	{
		die("lastname wasn't submitted !");
	}
	if(empty($lastname))
	{
		die("Empty lastname !");
	}

	if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
	{
        die("Only letters and white space allowed"); 
    }

    if(!isset($email))
	{
		die("Email wasn't submitted !");
	}
	if(empty($email))
	{
		die("Empty Email !");
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
        die("Invalid email format");
    }

    if(!isset($password))
	{
		die("Password wasn't submitted !");
	}
	if(empty($password))
	{
		die("Empty Password !");
	}
	if((strlen($password)<5)||(strlen($password) > 15))
	{
		die("Invalid password length !");
	}

	if(!isset($c_password))
	{
		die("Password wasn't submitted !");
	}
	if(empty($c_password))
	{
		die("Password is not confirmed !");
	}
	if((strlen($c_password)<5)||(strlen($c_password) > 15))
	{
		die("Invalid password length !");
	}

	if($c_password != $password)
	{
		die("Password doesn't match !");
	}

	if(empty($mf))
	{
		die("Gender is required !");
	}

	if(empty($dob))
	{
		die("Date Of Birth is required !");
	}

	if(empty($country))
	{
		die("Country is required !");
	}
	print_r($_POST);
	echo "<script> alert('You are registered to CharmAsh now.'); </script>";
?>
