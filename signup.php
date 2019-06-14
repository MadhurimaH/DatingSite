<?php 
	$section = "signup";
	include('inc\header.php') ?>
<div class="jumbotron" style="background: url(pics/slide.jpg) no-repeat center center fixed; height: 300px;"> </div>
<br>
<h1 style="margin-left: 30px;">Register Here For Free! </h1> <br> 
<form style="margin-left: 32px;" class="form-horizontal" action="sign.php" method="post">
	<div class="form-group">
	<label for="inputFirstname" class="col-sm-2 control-label">
	First Name : </label>
	<div class="col-sm-10">
	<input type ="text" name ="firstname"  required>
	</div>
	</div>

	<div class="form-group">
	<label for="inputLastname" class="col-sm-2 control-label">
	 Last Name : </label>
	 <div class="col-sm-10">
	 <input type "text" name = "lastname" required>
	 </div>
	 </div>
	
	<div class="form-group">
	<label for="inputEmail" class="col-sm-2 control-label">
	 E-mail : </label>	
	 <div class="col-sm-10">
	 <input type = "email" name = "email" required>
	 </div>
	 </div>
	

	<div class="form-group">
	<label for="inputPassword" class="col-sm-2 control-label">
	Password: </label>	
	<div class="col-sm-10"> 
	<input type="password" name = "password" required>
	</div>
	</div>

	<div class="form-group">
	<label for="inputPassword" class="col-sm-2 control-label">
	Confirm Password: </label>
	<div class="col-sm-10"> 
	<input type="password" name = "c_password" required>
	</div>
	</div>
	
	<div class="form-group">
	<label for="inputGender" class="col-sm-2 control-label">
	Gender: </label> 
	<div style="margin-top: 6px;">
	<input type = "radio" name = "mf" value = "Male"> Male
	<input type = "radio" name = "mf" value = "Female"> Female
	</div>
	</div>

	<div class="form-group">
	<label for="inputDob" class="col-sm-2 control-label">
	Date of Birth : </label>
	<div class="col-sm-10">
	<input type = "date" name ="dob">
	</div>
	</div>

	<div class="form-group">
	<label for="inputCountry" class="col-sm-2 control-label">
	Country : </label>
	<div>
	<input list="country" name="country">
	<datalist id="country">
	<option value="America"> </option>
	<option value="India"> </option>
	<option value="Pakistan"> </option>
	<option value="France"> </option>
	<option value="Canada"> </option>
	<option value="England"> </option>
	<option value="Zimbawe"> </option>
	<option value="UAE"> </option>
	<option value="China"> </option>
	<option value="japan"> </option>
	</datalist>
	</div>
	</div>

	<button style="margin-left: 340px;" type="submit" value = "Submit" class="btn btn-success"> Register Now </button>
</form>
<br>
<?php include('inc\footer.php') ?>