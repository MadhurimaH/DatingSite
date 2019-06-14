<?php include('inc\header.php') ?>
<div class="jumbotron" style="background: url(pics/slide.jpg) no-repeat center center fixed; height: 300px;"> </div>
<center><h1 style="font-size: 70px;"> My Profile </h1> </center>
	
      <div class="row" style="margin-left: 5px;">
		<div class="col-md-2">
  	  		<input type = "date" name ="dob">
  	  	</div>
  		<div class="col-md-7">
  			<div>
				<strong style="font-size: 30px;">Self Summary</strong> <br> <br>
					<textarea rows = "5" cols = "60" name = "summary">
                	Describe yourself in few words...
                	</textarea>
			</div>
  		</div>
  		<div class="col-md-3">
  			<button type="submit" class="btn btn-success">Upload your Image</button>
  		</div>
  		</div>
    <div class="row" style="margin-left: 5px;">
		<div class="col-md-4">
  			<div>
				<strong style="font-size: 30px;">Favourite Movies</strong> <br> <br>
					<textarea rows = "5" cols = "30" name = "movies">
                List some of them...
            </textarea>
			</div>
  		</div>
  		<br> <br> 
  		<div class="col-md-4">
  			<div>
				<strong style="font-size: 30px;">Best Thing About You</strong> <br> <br>
					<input type ="text" name ="BestYou">
			</div>
  		</div>
  		<div class="col-md-4">
  			<div>
				<strong style="font-size: 30px;">Color that attracts you</strong> <br> <br>
					<input type ="text" name ="Color"> 
			</div>
  		</div>
  		</div>

  		<div class="row" style="margin-left: 5px;">
  		<div class="col-md-3">
  			<div>
				<strong style="font-size: 30px;">Languages You Know</strong> <br> <br>
					<textarea rows = "5" cols = "30" name = "lang">
                You can speak...
            </textarea>
			</div>
  		</div>
  		<br> <br> 
  		<div class="col-md-3">
  			<div>
				<strong style="font-size: 30px;">Your Idol</strong> <br> <br>
					<input type ="text" name ="idol">
			</div>
  		</div>
  		<div class="col-md-3">
  			<div>
				<strong style="font-size: 30px;">Your Best Novels</strong> <br> <br>
					<textarea rows = "5" cols = "30" name = "books">
                You enjoy reading...
            </textarea>
			</div>
  		</div>
  		<div class="col-md-3">
  			<div>
				<strong style="font-size: 30px;">I am currently doing </strong> <br> <br>
					<input type ="text" name ="currently">
			</div>
  		</div>
  		</div>
<?php include('inc\footer.php') ?>