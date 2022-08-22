<?php 
    session_start();
	if(isset($_COOKIE['status']))
	{
?>










<html>
<head>
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
                        border: 1px solid black;
                        
                        appearance: none;
                        border-radius: .25rem;
                }
                </style>

	</head>

    <body>

        <form action="../JS/ajax.js" method="post" class="form-control">
        <table >
        
            
            
            <tr> <td align="center" colspan="2">Search<input type="text"></td> </tr>
            
            <tr> <td align="center" colspan="2">Result<input type="submit"></td> </tr>
            


        </table>
        </form>
        <fieldset class="form-control">
            <legend class="form-control">UserList</legend>
                <table border= 1>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>UserType</td>
                </tr>
                <tr>
                <?php
                $file = fopen('../model/user.txt', 'r');
                
                while (!feof($file)) {
                    $data = fgets($file);
                    //$user=[];
                    $user = explode("|", $data);
                    //echo "<pre>";
                    //print_r($user);
                    if(!empty($user[2]) && !empty($user[3])) {
                ?>
               
                <td><?php echo (($user[0])); ?> </td>
                <td><?php echo (($user[2])); ?> </td>
                <td><?php echo (($user[3])); ?> </td>
                
                </tr>
                <?php 
                }
            }
                ?>


                </table>
        </fieldset>
        <button class="form-control" style="width:30%; !important; background-color:deepskyblue; color: red;"><a href="adminhome.php">Go Back</a></button><br>
    </body>


</html>

<?php
$file = fopen('../model/user.txt', 'r');
?>

<?php 
	}else{
		echo "invalid request!";
	} 
    error_reporting(0);
?>