<?php
session_start(); 

include "db_conn.php";
#cek kalau nama,password act ada;
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])) {
   #conpem tak guna select *;

   function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

   }
   
   $uname = validate($_POST['email']);

   $pass = validate($_POST['password']);

   $name = validate($_POST['name']);

   
   #cek email ada ke tak tuk eleak duplicate email
   $sql = "SELECT * FROM userlist WHERE username='$uname'";
   #banding dalam database

   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) === 1) {
      header("Location: test.php?error=Your email is already registered");

   } else {
    #insert ke dalam database
        $insertCommand = "INSERT INTO userlist (username, password, name, status) VALUES ('$uname', '$pass', '$name', 1);";

        if(mysqli_query($conn, $insertCommand)){  
    
        header("Location: test.php");
        
        }else{  
        
        $errorMessage =  "Could not insert record: ". mysqli_error($conn);  
        header("Location: test.php?error=$errorMessage");
        
        }  
   }
   
} else {
    header("Location: test.php?error=Missing name, User name or password value.");
}

exit();

?>