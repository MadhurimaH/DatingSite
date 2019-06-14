<?php
	$section = "edit"; 
	include('inc\header.php');
	$file = "./xml/".$user.".xml";
	$xml=simplexml_load_file($file) or die("Error: Cannot create object"); 
	//$xml->summary = "Hello";
	//$xml->asXML($file);
	?>
<div class="jumbotron" style="background: url(pics/slide.jpg) no-repeat center center fixed; height: 300px;"> </div>
<br>
<h1 style="margin-left: 30px;">Personal Data </h1> <br> 
<form style="margin-left: 32px;" class="form-horizontal" action="saveprofile.php" method="post">
	<div class="form-group">
	<label for="inputSelf" class="col-sm-2 control-label">
	Self Summary: </label>
	<div class="col-sm-10">
	<textarea rows = "5" cols = "60" name = "summary">
		<?php 
			if(empty($xml->summary))
                	echo "Describe yourself in few words...";
              else
              		echo $xml->summary;
        ?>
    </textarea>
	</div>
	</div>

	<div class="form-group">
	<label for="inputMovies" class="col-sm-2 control-label">
	 Favourite Movie: </label>
	 <div class="col-sm-10">
	 <textarea rows = "1" cols = "30" name = "movies">
        <?php 
			if(empty($xml->movies))
                	echo "";
              else
              		echo $xml->movies;
        ?>
     </textarea>
	 </div>
	 </div>
	
	<div class="form-group">
	<label for="inputBestYou" class="col-sm-2 control-label">
	 Best Thing About You: </label>	
	 <div class="col-sm-10">
	 <!--input type = "text" name = "bestYou"--> 

	 <?php 
			if(empty($xml->bestYou))
                	echo "<input type = 'text' name = 'bestYou'>";
              else
              		echo "<input type = 'text' name = 'bestYou' value = '$xml->bestYou'>";
      ?>
	 </div>
	 </div>
	

	<div class="form-group">
	<label for="inputColor" class="col-sm-2 control-label">
	Color that attracts you: </label>	
	<div class="col-sm-10"> 
	 <?php 
			if(empty($xml->color))
                	echo "<input type='color' name = 'color'>";
              else
              		echo "<input type='color' name = 'color' value = '$xml->color'>";
      ?>
	</div>
	</div>

	<div class="form-group">
	<label for="inputLanguage" class="col-sm-2 control-label">
	Language You Know: </label>
	<div class="col-sm-10"> 
	<textarea rows = "1" cols = "30" name = "lang">
      <?php 
			if(empty($xml->language))
                	echo "";
              else
              		echo $xml->language;
      ?>
    </textarea>
	</div>
	</div>
	
	<div class="form-group">
	<label for="inputIdol" class="col-sm-2 control-label">
	Your Idol: </label> 
	<div style="margin-top: 6px;">
	<textarea rows = "1" cols = "30" name = "idol">
      <?php 
			if(empty($xml->idol))
                	echo "Your role model..";
              else
              		echo $xml->idol;
      ?>
    </textarea>
	</div>
	</div>

	<div class="form-group">
	<label for="inputNovels" class="col-sm-2 control-label">
	Your Best Novel: </label>
	<div class="col-sm-10">
	<textarea rows = "2" cols = "30" name = "books">
     <?php 
			if(empty($xml->novel))
                	echo "";
              else
              		echo $xml->novel;
      ?>           
    </textarea>
	</div>
	</div>

	<div class="form-group">
	<label for="inputCurrent" class="col-sm-2 control-label">

	You are currently doing : </label>
	<?php 
			if(empty($xml->current))
                	echo "<input list='current' name='current'>";
              else
              		echo "<input list='current' name='current'value = '$xml->current'>";
      ?>
	<div>
	
	<datalist id="current">
	<option value="School"> </option>
	<option value="High School"> </option>
	<option value="College"> </option>
	<option value="Higher Degree Courses"> </option>
	<option value="Job"> </option>
	<option value="Business"> </option>
	<option value="Services"> </option>
	<option value="Other"> </option>
	</datalist>
	</div>
	</div>

	<button style="margin-left: 340px;" type="submit" value = "Submit" class="btn btn-success"> OK </button>
</form>
<br>
<?php include('inc\footer.php') ?>