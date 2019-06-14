<?php 
	$section = "profile";
	include('inc\header.php');
	$file = "./xml/".$user.".xml";
	$xml=simplexml_load_file($file) or die("Error: Cannot create object");
	//print_r($_POST);
	$summary = $_POST["summary"];
	$movies = $_POST["movies"];
	$bestYou = $_POST["bestYou"];
	$color = $_POST["color"];
	$lang = $_POST["lang"];
	$idol = $_POST["idol"];
	$books = $_POST["books"];
	$current = $_POST["current"];
	$xml->summary = $summary;
	$xml->movies = $movies;
	$xml->bestYou = $bestYou;
	$xml->color = $color;
	$xml->language = $lang;
	$xml->idol = $idol;
	$xml->novel = $books;
	$xml->current = $current;
	$xml->asXML($file);
	echo "Your profile has been updated. Redirecting...";
	header('Refresh: 2; URL = profile1.php');
?>