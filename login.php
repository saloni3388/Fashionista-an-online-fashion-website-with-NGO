<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="UrbanFashionImg/favicon.ico">
    <title>Login</title>
</head>
<body id="">
    <?php
        include 'dbcon.php' ;
        if(isset($_POST['login']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $email_search = "select * from register where email='$email' ";
            $query = mysqli_query($con,$email_search);
            $email_count = mysqli_num_rows($query);
            
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
                        location.replace('Fashionistaafterlogin.php')
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
<img src="UrbanFashionImg/logo1.png" alt="error404">
<h1 id="heading" align='center' id="heading">Login Page</h1>
<div class='main'>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            
            <input type="text" name="email" placeholder="Enter Email" id='input1'>
            <br><br>
            <input type="password" name="password" placeholder="Enter Password">
            <br><br>
            <input type="submit" name="login" value="Login" id='submitbutton'>
            <p id='para'>Not hava a Account? <a href="registration.php">Register here</a></p>
        </form>
</div>
    
</body>
</html>