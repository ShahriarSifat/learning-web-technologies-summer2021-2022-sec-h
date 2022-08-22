<html>
<head>
	<title>Name</title>
        <style>
                .form-control{
                        display: block;
                        width: 50%;
                        padding: .375rem .75rem;
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
        <h1 align="center">Log In</h1>
	<form action="../controller/logincheck.php" class="form-control" method="post" onsubmit="return checkIdPass()" enctype="">
		
                        
                    UserId: <br><input type="text" class="form-control" name="id" id="user" value="" placeholder="Enter Your ID"/> <br>
                    Password: <br><input type="password" class="form-control" name="pass" id="pass" value="" placeholder="Enter Your Password"/> <br>
                    <br><input type="submit" class="form-control" style="width:30%; !important;" name="submit" value="Submit"/>
                                      
	</form>
        <a href="../view/registration.php"><button align="center" class="form-control" style="width:30%; !important; color: red;">Register</button></a>
        <script>
                function checkIdPass()
                {
                        var x= document.getElementById("user").value;
                        if(x == "")
                        {
                                alert('Your id field is empty');
                        }
                        var y= document.getElementById("pass").value;
                        if(y == "")
                        {
                                alert('Your Password field is empty');
                        }
                        
                
                }
        	</script>
</body>
</html>
