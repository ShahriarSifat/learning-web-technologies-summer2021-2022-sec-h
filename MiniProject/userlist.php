<?php 
	if(isset($_COOKIE['status']))
	{
?>

<html>
    <body>
        <fieldset>
            <legend>UserList</legend>
                <table border= 1>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>UserType</td>
                </tr>
                <tr>
                <?php
                $file = fopen('user.txt', 'r');
            
                while (!feof($file)) {
                    $data = fgets($file);
                    $user = explode("|", $data);
                ?>
                <td><?php echo (trim($user[0])); ?> </td>
                <td><?php echo (trim($user[2])); ?> </td>
                <td><?php echo (trim($user[3])); ?> </td>
                
                </tr>
                <?php 
                }
                
                ?>


                </table>
        </fieldset>
        <a href="adminhome.php">Back</a><br>
    </body>


</html>

<?php
$file = fopen('user.txt', 'r');
?>

<?php 
	}else{
		echo "invalid request!";
	} 
?>