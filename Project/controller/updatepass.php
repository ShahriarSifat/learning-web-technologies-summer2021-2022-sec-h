<?php 
    session_start();
    require_once('../model/db.php');
	if(isset($_COOKIE['status']))
	{
        // if(isset($_POST['']))
        // {
            $newpass=$_POST['newpass'];
            $confpass=$_POST['confpass'];
            $id=$_POST['id'];
            $val=$_POST['type'];

            if($newpass == $confpass){
            $conn = getconnection();
            $sql = "UPDATE users SET password=$newpass WHERE user_id =$id";
            $result = mysqli_query($conn, $sql);
            if($result && $val==1){
                header('location: ../view/adminhome.php'); 
            }else if($result && $val==2){
                header('location: ../view/userhome.php');  
            }
            
            else{
                echo "Password Not Changed";
            }
            }
            else{
            echo "Password doesn't match.";
        }
            }

        // }

        else{
            echo "Invalid Request!";
        }  
	
?>
