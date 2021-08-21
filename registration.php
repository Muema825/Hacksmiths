 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="rgstr.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,800&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container">
		<h1>Sign up For Free</h1>
	</div>
<style>
	body{
		background-image: url('https://images.unsplash.com/photo-1625038627601-88802f4e7049?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjM0fHxwYXR0ZXJucyUyMGFuZCUyMHRleHR1cmVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60.jpg');
	}
</style>

<body>
	<div
		class ="contact-box">
		<div class="contact-left">
			<h3> Send your request</h3>
		<form action="process.php">
		<div class="input-row">
			<div class="col">
		<input type="hidden" name="admissionnumber" value="02259"/>

		<label for="firstname">Enter your First Name</label><br/>
		<input type="text" class ="form-control" name="firstname" required placeholder="John" minilength="3" maxlength="30"/><br/><br/>

		<label for="lastname">Enter your Last Name</label><br/>
		<input type="text" class="form-control" name="lastname" required placeholder="Doe" /><br/><br/>

		<label for="othername">Enter your Other Name</label><br/>
		<input type="text" class="form-control"name="othername" required/><br/><br/>

		<label for="useremail">Enter your Email</label><br/>
		<input type="email" name="useremail" required value= "firstname.lastname@gmail.com" readonly="Register" /><br/><br/>
			<!--File Upload-->
		<label for="userfile">Upload Your File </label><br/>
		<input type="file" name="userfile" /><br><br/>

		<!--Allow user to Submit Form-->
		<button type="submit">Register Now!</button>

		<!--Allow user to reset entire form-->
		<button type="reset">Clear Form</button>
	</form>
		</div>
	</div>
</div>
<div class="contact-right">
	<div class ="wrapper">
		<img class ="img-eye" src="write2.jpg" alt="">
	
		</div>

	</div>
</div>


	
	
<a href="mainpage2.php">Go Back to Main Page</a>

		 <div class="badge bg-primary text-wrap" style="width: 70em;">
			<p class="text2">

				
				
			</p>
		</div>