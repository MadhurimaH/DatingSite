<?php 
	$section = "profile";
	include('inc\header.php');
	$file = "./xml/".$user.".xml";
	$xml=simplexml_load_file($file) or die("Error: Cannot create object"); 
?>
<div class="jumbotron" style="background: url(pics/slide.jpg) no-repeat center center fixed; height: 300px;"> </div>
<center><h1 style="font-size: 70px;"> My Profile  <span style="padding-left: 140px;"> <a href="editprofile.php" 
class = "btn btn-default">Edit Profile</a></span> </h1></center> 
	
      <div class="row" style="margin-left: 5px;">
		<div class="col-md-2">
  	  		<div class="circleblock"> <?php echo $xml->dd; ?> </div> <br> <br> <br> <br> <b> <?php echo $xml->mm; ?> <br> 
  	  		<?php echo $xml->yy; ?> </b>
  	  	</div>
  		<div class="col-md-7">
  			<div>
				<strong style="font-size: 30px;">Self Summary</strong> <br> <br>
				<?php echo $xml->summary; ?>
			</div>
  		</div>
  		<div class="col-md-3">
  			<img src=<?php echo "./pics/".$xml->path; ?> alt = "Profile Pic">
  		</div>
  		</div>
    <div class="row" style="margin-left: 5px;">
		<div class="col-md-4">
  			<div>
				<strong style="font-size: 30px;">Favourite Movies</strong> <br> <br>
						<?php echo $xml->movies; ?>
			</div>
  		</div>
  		<br> <br> 
  		<div class="col-md-4">
  			<div>
				<strong style="font-size: 30px;">Best Thing About You</strong> <br> <br>
					<?php echo $xml->bestYou; ?>
			</div>
  		</div>
  		<div class="col-md-4">
  			<div>
				<strong style="font-size: 30px;">Color that attracts you</strong> <br> <br>
					<?php echo '<span style="background-color:'.$xml->color.'">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</span>'; ?>
			</div>
  		</div>
  		</div>

  		<div class="row" style="margin-left: 5px;">
  		<div class="col-md-3">
  			<div>
				<strong style="font-size: 30px;">Languages You Know</strong> <br> <br>
					<?php echo $xml->language; ?>
			</div>
  		</div>
  		<br> <br> 
  		<div class="col-md-3">
  			<div>
				<strong style="font-size: 30px;">Your Idol</strong> <br> <br>
					<?php echo $xml->idol; ?>
			</div>
  		</div>
  		<div class="col-md-3">
  			<div>
				<strong style="font-size: 30px;">Your Best Novels</strong> <br> <br>
					<?php echo $xml->novel; ?>
			</div>
  		</div>
  		<div class="col-md-3">
  			<div>
				<strong style="font-size: 30px;">I am currently doing </strong> <br> <br>
					<?php echo $xml->current; ?>
			</div>
  		</div>
  		</div>
  		<div>
  		
  		<button class = "btn btn-primary" onclick="document.getElementById('matchlist').style.display = 'block';">Show Matching Profiles</button>
  		<br><div id="matchlist" style="display:none;">
  		<h1> Matching Profiles</h1>
  		<?php
  		$xmlprofile = array("madhurima@mail.com", "arnav@mail.com", "mallika@mail.com", "shivam@mail.com", "sanjana@mail.com", "aarti@mail.com", "pooja666@gmail.com", "ish6@gmail.com", "jainjain@gmail.com", "singhraunak@gmail.com", "rana6@gmail.com", "rishabh@mail.com", "abhaycool@gmail.com"  ); 
			$arrlen = count($xmlprofile);
			$str = "";
			$uname = $xml->firstname;
			$curr = $xml->current;

			if(empty($uname) or empty($curr))
			{
				die("User Not Found!");
			}
			$i = 0;
			for($i = 0; $i < $arrlen; $i++)
			{
				$file = "./xml/".$xmlprofile[$i].".xml";
				$x=simplexml_load_file($file);	
				if(trim($x->firstname) != trim($uname))
				{   
					if(trim($x->current) == trim($curr))
					{
						$str .= "<div class = 'col-md-2'>".$x->firstname." ".$x->lastname."</div><div class = 'col-md-2'><img src='./pics/".$x->path."' width ='64px' height = '64px'/>"."</div><br>";
					}
				}
			}
			echo $str;
			  		?>
		</div>
  		</div> <br> <br> <br> <br> 
  		<hr class="clearfix" />
<?php include('inc\footer.php') ?>