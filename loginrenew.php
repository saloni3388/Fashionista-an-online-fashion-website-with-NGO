<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login form</title>
    <link rel="shortcut icon" href="iconfile.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="UrbanFashionImg/favicon.ico">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #088178;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 150px;
    width: 150px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -25px;
    top: -40px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -35px;
    bottom: -40px;
}
form{
    height: 500px;
    width: 365px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    margin-top: -0.2cm;
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

#panchor{
    color:blue;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

.logoimg
{
    margin-left:1cm;
    margin-top : 0.5cm;
}
#para
{
    margin-top:-0.4cm;
    font-size: 13.5px;
}
    </style>
</head>
<body>
    <?php
    include 'dbcon.php' ;
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = "select * from register where email='$email' ";
        $query = mysqli_query($con,$email_search);
        $email_count = mysqli_num_rows($query);
        
        if($con){
            ?>
            <script>
                alert("Database connected")
                </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Database not connected")
                </script>
            <?php

        }

        if($email_count)
        {
            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];

            $_SESSION['fullname'] = $email_pass['fullname'];


            $pass_decode = password_verify($password,$db_pass);
            
            if($pass_decode)
            {
                ?>
                <script>
                    alert("Login successfull");
                    location.replace('Fashionistaafterlogin.php');
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert("Incorrect Password");
                </script>
                <?php

            }
        }
        else
        {
            ?>
            <script>
                alert("Email not found");
            </script>
            <?php
        }
    }

?>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <img src="UrbanFashionImg/logo1.png" alt="error 450"  class="logoimg">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" name="email" placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password">

        <button name="login" >Log In</button>
        <div class="social">
          <!-- <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div> -->
          <p id='para'>Do Not have a Account? <a href="registrationpoly.php" id="panchor">Register here</a></p>

        </div>
    </form>
</body>
</html>
