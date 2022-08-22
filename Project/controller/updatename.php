<?php 
    session_start();
    require_once('../model/db.php');
	if(isset($_COOKIE['status']))
	{
        // if(isset($_POST['']))
        // {
            $newname=$_POST['newname'];
            $oldname=$_SESSION['username'];
            
            $type = $_POST['type'];

            if($newname){
            $conn = getconnection();
            $sql = "UPDATE users SET name = $newname WHERE 'name' = $oldname";
            $result = mysqli_query($conn, $sql);
            if($result && $type == 1){
                header('location: ../view/adminhome.php');
            }else if($result && $type == 2){
                header('location: ../view/userhome.php');
            }else{
                echo "Name Not Changed";
            }
            }
            else{
            echo "Name Invalid";
        }
            }

        // }

        else{
            echo "Invalid Request!";
        }  
	
?>
