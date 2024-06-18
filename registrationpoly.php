<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Registration form</title>
 
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
    margin-bottom: 0.7cm;
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

#username
{
    margin-top: 0.6cm;
}

button{
    margin-top: -25px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
/* #submit
{
    margin-top: -0.5cm;
    /* font-weight: larger; */
    /* font-weight: bold;
    word-spacing: 6px;
    letter-spacing:2px; */
#panchor
{
	color: blue;
    word-spacing: 0cm;
}
#heading
{
    margin-top: -0.7cm;
    letter-spacing:2px;
}
#para
{
    margin-top:-0.4cm;
    word-spacing:2px;
    font-size: 13.5px;
    /* font-weight : 300; */
}
.logoimg
{
    margin-left:1cm;
    margin-top : 0.5cm;
}
.fulldiv
{
    margin-top : -0.1cm;
}
    </style>
</head>
<body>
    <?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){
        $fullname = mysqli_real_escape_string($con,$_POST['fullname']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $phone = mysqli_real_escape_string($con,$_POST['phone']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
    
        $pass = password_hash($password,PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

        $_SESSION['name'] = $fullname;
        //adding email that does not exist
        $emailquery = " select * from register where email = '$email' "; 
        $query= mysqli_query($con,$emailquery);
        $emailcount = mysqli_num_rows($query);
        if($emailcount>0)
        {
        ?>
            <script>
                alert("Email Already Used");
            </script>
        <?php
        }
        else{
            if($password == $cpassword)
            {
                $insertquery = "insert into register(fullname,email,phone,password,cpassword) values('$fullname','$email','$phone','$pass','$cpass')";
                $iquery = mysqli_query($con,$insertquery);
                if($iquery){
                    ?>
                    <script>
                        alert("Connection Successfull . User added to Website");
                        alert("Login and Starting Buying");
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert("Connection Not Successfull");
                    </script>
                    <?php
                
                }
            }
            else
            {?>
                <script>
                    alert("Password are not similar");
                </script>
                <?php

            }

        }

    }
    ?>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <img src="UrbanFashionImg/logo1.png" alt="error 450"  class="logoimg">
    <form action="" method="post" class="fulldiv">
        <h3 id="heading">Sign Up</h3>

        <input type="text" name="fullname" placeholder="User name" required="" id="username">
		<input type="email" name="email" placeholder="Email" required="">
		<input type="text" name="phone" id="" placeholder="Phone Number" required>
		<input type="password" name="password" placeholder="Password" required="">
		<input type="password" name="cpassword" placeholder="Confirm Password" required>
        <br><br>
		<button name="submit" >SIGN UP</button>
		<p id="para" align="center">Already had a account? <a href="loginrenew.php" id="panchor">Login Here</a> </p>

    </form>
</body>
</html>
