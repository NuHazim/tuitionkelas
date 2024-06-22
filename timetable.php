<?php
session_start(); 

include "db_conn.php";

if(empty($_GET['startDate'])) {
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $start_date=date('Y-m-d');
} else {
    $start_date = $_GET['startDate'];
}
$sql = "SELECT * FROM schedule where date >='". $start_date ."' order by date;";

   $result = mysqli_query($conn, $sql);

   //if (mysqli_num_rows($result) > 0) {
   // header("Location: timetable.php");
   //}
?>
<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverLearning</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body> 
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <img src="logoafterkelas.png"  alt="">
                    <span class="nav-item"><span class="titlecolor">After</span>kelas</span>
                </a></li>
                <li>
                    <div class="profile-box">
                        <img src="ali.png" class="pfp">
                        <span class="nama">Muhammad Ali</span>
                    </div>
                </li>
                <li><a href="profile.php">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="timetable.php">
                    <i class="fas fa-clock"></i>
                    <span class="nav-item">Timetable</span>
                </a></li>
                <li><a href="booking.php">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span class="nav-item">Teachers</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-money-bill"></i>
                    <span class="nav-item">Recent Purchase</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-comments"></i>
                    <span class="nav-item">Chatroom</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span class="nav-item">Subscribed</span>
                </a></li>
                <li><a href="#" class="Setting">
                    <i class="fas fa-cog"></i>
                    <span class="nav-item">Settings</span>
                </a></li>
            </ul>
        </nav>
        <section class="main">
            <div class="main-top">
                <h1>Time Table</h1>
                <!--<i class="fas fa-user-cog"></i>-->
            </div><br><br>
            <div class="main-skills">
                <div class="card-book">
                    <form method="get" action="timetable.php" class="searchDate">
                        <label>Start Date: </label>
                        <input type="text" value="<?php echo $start_date; ?>" name="startDate" id="startDate"></input>
                        <button type="submit">Change</button>
                    </form>
                    <?php
                    
                    //echo $start_date;
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result))
                    {
                    // This will loop through each row, now use your loop here
                    ?>
                     <div class="book">
                        <h3><br><?php echo $row['Day']?>   (<?php echo $row['Date']?>):</h3>
                        <div class="card-booking">
                            <h1><?php echo $row['teacher']?></h1><h2><?php echo $row['subject']?></h2><h4><?php echo $row['Timestart']?> - <?php echo $row['Timeend']?></h4>
                            <form action="joinnow.php" method="post" >
                                <input type="hidden" id="joinid" name="join" value="<?php echo $row['id'];?>">
                                <input type="hidden" id="username" name="username" value="<?php echo $row['username'];?>">
                                <button type="submit" class="join">Join</button>
                            </form>
                        </div>
                    </div>
                    <?php

                    }
                    ?>

                    <?php
                    } else {
                    ?>
                    <div class="book">
                        <h3>No record</h3>
                        <div class="card-booking">
                            &nbsp;
                        </div>
                    </div>

                    <?php
                    } 
                    ?>

                </div>
                
                <!--<div class="card">
                    <i class="fab fa-wordpress"></i>
                    <h3>WordPress</h3>
                    <p>Join Over 3 million Students</p>
                    <button>Get Started</button>
                </div>
                <div class="card">
                    <i class="fas fa-palette"></i>
                    <h3>Graphic Design</h3>
                    <p>Join Over 2 million Students</p>
                    <button>Get Started</button>
                </div>
                <div class="card">
                    <i class="fab fa-app-store-ios"></i>
                    <h3>IOS dev</h3>
                    <p>Join Over 1 million Students</p>
                    <button>Get Started</button>
                </div>-->
            </div>
                <!--
                <section class="main-course">
                    <h1>My Courses</h1>
                    <div class="course-box">
                        <ul>
                            <li class="active">In Progress</li>
                            <li>Explore</li>
                            <li>Incoming</li>
                            <li>Cooked</li>
                        </ul>
                        <div class="course">
                            <div class="box">
                                <h3>HTML</h3>
                                <p>80% - progress</p>
                                <button>continue</button>
                                <i class="fab fa-html5 html"></i>
                            </div>
                            <div class="box">
                                <h3>CSS</h3>
                                <p>50% - progress</p>
                                <button>continue</button>
                                <i class="fab fa-css3-alt css"></i>
                            </div>
                            <div class="box">
                                <h3>JavaScript</h3>
                                <p>30% - progress</p>
                                <button>continue</button>
                                <i class="fab fa-js-square js"></i>
                            </div>
                        </div>
                    </div>
                </section>-->
        </section>
    </div>
</body>
</html></span>