<?php 
  if(isset($_GET["err"]))
    $errcode = intval($_GET["err"]);
  else
    $errcode = 0;
  $section = "home";
  include('inc\header.php');
  if ($errcode > 0) {
    echo "<div class='alert alert-warning close' data-dismiss='alert' aria-label='close' title = 'close'><strong>Warning!</strong> Invalid email or password !</div>";}
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background: url(pics/slide.jpg) no-repeat center center fixed;">
      <div class="container">
        <h1>Welcome</h1>
        <p>Tired of loneliness? Want to desperately meet someone?
              Curious to know about other people's life?
              Passionate to have some variants in your LifeStyle? <br> Just Login, and explore the beauty! New User? 
          Come on, Sign Up Fast! It's absolutely free.</p>
          <p> CharmAsh welcomes you... Register and then meet the one you are waiting for...Enhance your Life :D </p>
        <p><a class="btn btn-primary btn-lg" href="stories.php" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

      <div class="row" style="background-color: cyan; padding: 20px 50px 20px 100px;">
  	  	<div class="col-md-3">
  	  		<div class="myblock">Best</div> <br> <br> <br> Matching <br> Algorithms
  	  	</div>
  		<div class="col-md-3">
  			<div class="myblock">5000</div> <br> <br> <br> Successful <br> Meetings
  		</div>
  		<div class="col-md-3">
  			<div class="myblock">12000</div> <br> <br> <br> Facebook <br> Likes
  		</div>
  		<div class="col-md-3">
  			<div class="myblock">2500</div> <br> <br> <br> User <br> Accounts
  		</div>
	  </div>
	  <br> <br>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <img src="pics/madhurima.jpg" alt="Madhurima" class="img-circle">
          <h2>Services</h2>
          <p>Powerful database is used. Every feature is based on latest versions.</p>
          <p>Regular updates are provided. Daily visits are done. Any problem is taken into consideration. </p>
          <p><a class="btn btn-default" href="stories.php" role="button">More &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="pics/shivam.jpg" alt="Shivam" class="img-circle">
          <h2>Marketing</h2>
          <p>All services are free. </p>
          <p> We belive in building trust among people. Spread love, beyond differences. </p>
          <p><a class="btn btn-default" href="faq.php" role="button">More &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <img src="pics/team.jpg" alt="Team" class="img-circle">
          <h2>About Company</h2>
          <p>CharmAsh website is created to connect people globally</p>
          <p> According to one's interests, he or she could explore and find the people they are interested in. By applying some psychological approach, we avail different people across countries from which one can select the most suitable.</p>
          <p> One can post their reviews, share photos and could get socially connected. </p>
          <p><a class="btn btn-default" href="about.php" role="button">More &raquo;</a></p>
        </div>
      </div>

      <hr>
<?php include('inc\footer.php') ?>
