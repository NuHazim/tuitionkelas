<?php
session_start(); 

include "db_conn.php";

$table_id = $_POST['tableid'];
//echo $table_id;

$sql = "SELECT * FROM timetable where id =". $table_id .";";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$theDate = $row['date'];
$timestart=$row['timestart'];
$timeend = $row['timeend'];
$theDay=date('l',strtotime($theDate));
$idteacher = $row['idteacher'];

/*echo "Date is $theDate<br>";
echo "Time start is $timestart";
echo "Time end is $timeend";
echo "The day is $theDay";*/


$sql2 = "SELECT * FROM teachers where id =". $idteacher .";";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);

$name=$row2['name'];
$subject=$row2['subject'];
$description=$row2['description'];

/*echo "Teacher name is $name";
echo "Subject is $subject";
echo "Description is $description";*/
$username=$_SESSION['username'];
$insertCommand = "INSERT INTO schedule (Day, Date, Description, Joined, JoinDate,Timestart,Timeend,teacher,subject,username) VALUES ('$theDay', '$theDate', '$description', 0,NULL,'$timestart','$timeend','$name','$subject','$username');";

        if(mysqli_query($conn, $insertCommand)){  
    
        header("Location: timetable.php");
        
        }else{  
        
        $errorMessage =  "Could not insert record: ". mysqli_error($conn);  
        header("Location: test.php?error=$errorMessage");
        }  
?>
