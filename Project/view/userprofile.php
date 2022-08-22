<?php 
    session_start();
	if(isset($_COOKIE['status']))
	{
?>

<html>
    <head>
        <title>Edit Profile</title>
    
		<style>
	.form-control{
                        display: block;
                        width: 100%;
                        padding: .75rem .75rem;
                        font-size: 1rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: silver;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        
                        appearance: none;
                        border-radius: .25rem;
                }
                </style>

	
    </head>
    <body>
        <fieldset action="../controller/updatename.php" class="form-control" method="post" enctype="">
            <legend class="form-control">Change Name</legend>
            New Name: <input type= "text" name = "newname" c value = ""><br>
            <input type = "submit" name = "submit" class="form-control" value = "Submit">
            <input type = "hidden" name = "type" value = "2">
            <button class="form-control" style="width:30%; !important; background-color:deepskyblue; color: red;"><a href="adminhome.php">Go Home</a></button>
        </fieldset>

    </body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>