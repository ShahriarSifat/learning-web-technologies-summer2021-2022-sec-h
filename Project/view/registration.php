<?php 
require '../controller/regchk.php'; ?>

<html>
<head>
	<title>Signup</title>
	
		<style>
	.form-control{
                        display: block;
                        width: 98%;
                        padding: .75rem .75rem;
                        font-size: 1rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: silver;
                        background-clip: padding-box;
                        border: 1px solid black;
                        
                        appearance: none;
                        border-radius: .25rem;
                }
                </style>

	
</head>
<body>
	<h1 align="center" class="form-control">Register Here</h1>
	<form class="form-control" action="../controller/regchk.php" onsubmit="return checkIdPass()" method="post" enctype="">
	<!-- <form class="form-control" action="../controller/regchk.php"  method="post"> -->

			<legend class="form-control">Registration</legend>
			<table >
				<tr><td>Id:</td><td><input type="text" name="id" id="id" class="form-control" value="" placeholder="Enter Your ID"/></td></tr> <br>
				<tr><td>Password:</td><td> <input type="pass" id="pass" class="form-control" name="pass" value="" placeholder="Enter Your Password"/></td></tr> <br>
				<tr><td>Name:</td><td> <input type="text" name="name" id="name" class="form-control" value="" placeholder="Enter Your Name"/></td></tr> <br>
                <tr><td>Gender:</td><td> <input type="text" name="gender" id="gender" class="form-control" value="" placeholder="Enter Your Gender"/></td></tr> <br>
				<tr><td>E-mail:</td><td> <input type="email" name="email" id="email" class="form-control" value="" placeholder="Enter Your E-mail"/></td></tr> <br>
				
				<tr><td>UserType:</td>
						<tr><td><input type="radio" name="user" id="user" value="user"/>User<br></td></tr>
                        <tr><td><input type="radio" name="user" id="admin" value="admin"/>Admin<br></td></tr>
                		<input type="hidden" name="fname" value="signup"/><br>

						<tr><td><input type="submit" class="form-control" name="Signup" value="SignUp"><br></td></tr>
            </table>    
		
	</form>
	<button class="form-control"><a href="login.php">Go Back</a></button>
	<script>
		function checkIdPass()
		{
				var x= document.getElementById("id").value;
				if(x == "")
				{
						alert('Your id field is empty');
				}
				var y= document.getElementById("pass").value;
				if(y == "")
				{
						alert('Your Password field is empty');
				}
				var z= document.getElementById("name").value;
				if(z == "")
				{
						alert('Your Name field is empty');
				}
				
		
		}
		// function nullAlert($result){
		// 	if(is_null($result)){
		// 		alert('Empty field not accepted');
		// 	}
		// }
	</script>
</body>
</html>
