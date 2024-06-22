<?php
session_start(); 

include "db_conn.php";

$username = $_POST['username'];
$join=$_POST['join'];




$updateCommand = "UPDATE schedule SET Joined=1 , JoinDate=now() WHERE id=$join AND username='$username'";

        if(mysqli_query($conn, $updateCommand)){  
    
        header("Location: https://zoom.us/");
        
        }else{  
        
        $errorMessage =  "Could not insert record: ". mysqli_error($conn);  
        header("Location: test.php?error=$errorMessage");
        }  
?>