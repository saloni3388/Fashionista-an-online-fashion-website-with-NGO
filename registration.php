<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <link rel="shortcut icon" href="UrbanFashionImg/favicon.ico">
    <title>Register</title>
</head>
<body class="body">
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
                        alert("Connection Succesfull");
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert("Connection Not Succesfull");
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
<img src="UrbanFashionImg/logo1.png" alt="error404">
<h1 align='center' id="heading">Registration Page</h1>
<div class='main'>
<form action="" method="POST">
        <input id="input1" type="text" name="fullname" placeholder="Enter Full name" required>
        <br><br>
        <input type="text" name="email" id="" placeholder="Enter Email" required>
        <br><br>
        <input type="text" name="phone" id="" placeholder="Enter Mobile Number" required>
        <br><br>

        <input type="password" name="password" placeholder="Enter Password" required>
        <br><br>

        <input type="password" name="cpassword" placeholder="Confirm Password" required>
        <br><br>
        <input type="submit" name="submit" value="Submit"  id="submitbutton" >
        <p id="para">Already had a account? <a href="login.php">Login Here</a> </p>
    </form>
</div>
</body>
</html>