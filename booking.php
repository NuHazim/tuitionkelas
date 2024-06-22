<?php
session_start(); 

include "db_conn.php";

?>
<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
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
                <h1>Booking</h1>
            </div><br><br>
            <div class="main-skills">
                <div class="buttons">
                    <div class="dropdown">
                        <button>Subjects📚</button>
                        <div class="content">
                            <a href="#">Matematik</a>
                            <a href="#">Matematik Tambahan</a>
                            <a href="#">Fizik</a>
                            <a href="#">Kimia</a>
                            <a href="#">Biologi</a>
                        </div>
                    </div><br>  
                    <div class="dropdown">
                        <button>Time🕛</button>
                        <div class="content">
                            <a href="#">08:00-10:00</a>
                            <a href="#">10:00-12:00</a>
                            <a href="#">12:00-14:00</a>
                            <a href="#">14:00-16:00</a>
                            <a href="#">16:00-18:00</a>
                            <a href="#">18:00-20:00</a>
                            <a href="#">20:00-22:00</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button>Rating⭐</button>
                        <div class="content">
                            <a href="#">⭐</a>
                            <a href="#">⭐⭐</a>
                            <a href="#">⭐⭐⭐</a>
                            <a href="#">⭐⭐⭐⭐</a>
                            <a href="#">⭐⭐⭐⭐⭐</a>
                        </div>
                    </div>
                </div>
                <form class="search-form">
                    <div class="search">
                        <i class="fas fa-search"></i>
                        <input class="search-input" type="search" placeholder="Search Teacher's name">
                    </div>
                        <button type="reset" class="clear-button">Clear</button>
                        <button type="submit" class="search-button">Search</button>
                </form>
                        <?php       
                        $sql = "SELECT * FROM teachers order by name;";

                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($result))
                        {
                        ?>
                            <div class="popup" id="popup-<?php echo $row['id'];?>">
                    <a href="booking.php" class="overlay-close"><div class="overlay"></div></a>
                    <div class="content">
                        <div class="close-btn" onclick="togglePopup<?php echo $row['id'];?>()">&times;</div>

                       

                            <h1><?php echo $row['name'];?></h1>
                            <img src="image<?php echo $row['id'];?>.png" class="pfp_tc">
                            <h3>Subject:</h3><h3><?php echo $row['subject'];?></h3><br><br>
                            <h3 class="dtc"><?php echo $row['description'];?></h3><br><br><br>

                                <?php       
                                $sql2 = "SELECT * FROM timetable WHERE idteacher=".$row['id']." and date >= '".date('Y-m-d')."' order by date,timestart;";

                                $result2 = mysqli_query($conn, $sql2);
                                while($row2 = mysqli_fetch_array($result2))
                                 {
                                    $theDate=$row2['date'];
                                    $theDay=date('l',strtotime($theDate));
                                ?>
                                <br>

                    
                            <div class="time">
                                <h3>Day:</h3><h3><?php echo $theDay;?> (<?php echo $theDate;?>)</h3><br><br>
                                <h5>Link</h5>
                                <h4><?php echo $row2['timestart'];?></h4><h4> - </h4><h4><?php echo $row2['timeend'];?></h4>
                                <form action="booknow.php" method="post" >
                                    <input type="hidden" id="tableid" name="tableid" value="<?php echo $row2['id'];?>">
                                    <button type="submit">Book</button>
                                </form>
                            </div>
                            
                                <?php
                                 }
                                 ?>

                        
                        
                    </div>
                </div>
                        <?php
                        }
                        ?>  
                
                <div class="teachers">
                    <?php

                    $sql = "SELECT * FROM teachers order by name;";

                    $result = mysqli_query($conn, $sql);
                    
                    //echo $start_date;
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result))
                    {
                    // This will loop through each row, now use your loop here
                    ?>
                    <div class="teacher">
                        <h3><?php echo $row['name']?></h3>
                        <img src="image<?php echo $row['id'];?>.png">
                        <p></p>
                        <a href="#" onclick="togglePopup<?php echo $row['id'];?>()"><button>View</button></a> 
                    </div>
                    <?php
                    }
                    } else {
                    ?>
                    <div class="teacher">
                        <h3>No teacher record</h3>
                    </div>
                    <?php
                    }
                    ?>
                    
                </div>
                
            </div>
            
        </section>
    </div>
    <script>
 <?php       
$sql = "SELECT * FROM teachers order by name;";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
                    {
?>
        function togglePopup<?php echo $row['id'];?>(){
          document.getElementById("popup-<?php echo $row['id'];?>").classList.toggle("active");
     }
<?php
}
?>     
    </script>
</body>
</html></span>