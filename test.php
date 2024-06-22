<?php
session_start(); 

include "db_conn.php";

#echo 'Hello world from hazim';
if (isset($_POST['uname']) && isset($_POST['password'])) {
   #echo 'Hello ' . $_POST['uname'];
   function validate($data){

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

 }
   $uname = validate($_POST['uname']);

   $pass = validate($_POST['password']);

   $sql = "SELECT * FROM userlist WHERE username='$uname' AND password='$pass';";

   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) === 1) {
    $_SESSION['username'] =$uname;
    header("Location: timetable.php");

   } else {
    header("Location: login_error.php");
   }
   
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Kelas</title>
    <link rel="stylesheet" href="websitestyle.css">
</head>
<body>
     <header>
        <h2 class="logo">After Kelas</h2>
<?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
        <nav class="navigate">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="login">Login</button>
        </nav>
     </header>
     <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="test.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-ion name="mail"></ion-ion>
                    </span>
                    <input type="email" required name="uname">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-ion name="lock-closed"></ion-ion>
                    </span>
                    <input type="password" required name='password'>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="register.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-ion name="mail"></ion-ion>
                    </span>
                    <input type="text" required name="name" id="nameuser">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-ion name="mail"></ion-ion>
                    </span>
                    <input type="email" required name="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-ion name="lock-closed"></ion-ion>
                    </span>
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    I agree to the terms and condition</label>
                </div>
                <button type="submit" class="btn" id="button">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
     </div>
     <script src="script.js"></script>
</body>
</html>