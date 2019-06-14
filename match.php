<?php
include('inc\header.php');
$xmlprofile = array("madhurima@mail.com", "arnav@mail.com", "mallika@mail.com", "shivam@mail.com", "sanjana@mail.com", "aarti@mail.com", "pooja666@gmail.com", "ish6@gmail.com", "jainjain@gmail.com", "singhraunak@gmail.com", "rana6@gmail.com", "rishabh@mail.com", "abhaycool@gmail.com"  ); 
$arrlen = count($xmlprofile);
$str = "";
$uname = "";
$curr = "";
if (isset($_GET["unm"]) AND isset($_GET["cr"]))
{
	$uname = $_GET["unm"];
	$curr = $_GET["cr"];
} else
{
	die("Not Found!");
}
if(empty($uname) or empty($curr))
{
	die("User Not Found!");
}
$i = 0;
for($i = 0; $i < $arrlen; $i++)
{
	$file = "./xml/".$xmlprofile[$i].".xml";
	$x=simplexml_load_file($file);	
	if(trim($x->firstname) != $uname)
	{
		if(trim($x->current) == $curr)
		{
			$str .= $x->firstname." ".$x->lastname."<img src='./pics/".$x->path."' width ='64px' height = '64px'/>"."<br>";
		}
	}
}
echo $str;
include('inc\footer.php');
?>