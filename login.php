<?php
	$email = $_POST["email"]; 
	$password = $_POST["password"];

	if(!isset($email))
	{
		die("Email wasn't submitted !");
	}
	if(empty($email))
	{
		die("Empty Email !");
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       die("Invalid email format"); }

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

	if(($email == "madhurima@mail.com") && ($password == "flower"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}
	elseif(($email == "arnav@mail.com") && ($password == "honeybee"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}
	elseif(($email == "shivam@mail.com") && ($password == "shifu"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}

	elseif(($email == "aarti@mail.com") && ($password == "beautiful"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}

	elseif(($email == "mallika@mail.com") && ($password == "carpet"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}

	elseif(($email == "sanjana@mail.com") && ($password == "loveworld"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}

	elseif(($email == "abhaycool@gmail.com") && ($password == "12345"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}

	elseif(($email == "jainjain@gmail.com") && ($password == "1234599"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}

	elseif(($email == "pooja666@gmail.com") && ($password == "mahadev"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}

	elseif(($email == "ish6@gmail.com") && ($password == "lol9876"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}

	elseif(($email == "singhraunak@gmail.com") && ($password == "98765"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}

	elseif(($email == "rishabh@mail.com") && ($password == "superman"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}

	elseif(($email == "rana6@gmail.com") && ($password == "jupiter"))
	{
		session_name();
		session_start();
		$_SESSION["email"] = $email;
		$url = "Location: profile1.php";
		header($url);
	}
	else
	{
		$url = "Location: index.php ?err=1";
		header($url);
	}

?>
