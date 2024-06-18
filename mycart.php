<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta cha₹ et="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fashionista.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="UrbanFashionImg/favicon.ico">
    <title>Fashionista</title>
    <style>
        
        #header{
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: space-between;
    padding: 0px 20px 0px 80px ;
    /* padding: 20px 80px; */
    background: #e3e6f3;
    box-shadow: 0 5px 15px rgba( 0, 0, 0, 0.06);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;

}
    th{
        margin:2cm;
    }
    

    </style>
</head>

<body>
    <section id="header">
        <a href="#"><img src="UrbanFashionImg/logo1.png" class="logo" alt="fashionista_logo"></a>
         <div>
            <ul id="navbar">
                <li><a href="Fashionistaafterlogin.php">Home</a></li>
                <li><a  href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="ngobefore2000.php">NGO</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="loginrenew.php" onclick="Logout()">Logout</a></li>
                <!-- <li id="lg-bag"><a href=""><i class="fas fa-shopping-bag"></i></a></li> -->
                <div>
                <?php
                    $count = 0;
                    if(isset($_SESSION['cart']))
                    {
                        $count = count($_SESSION['cart']);

                    }
                    ?>
                    <a  href= "mycart.php" class="btn btn-outline-success"> My Cart <?php echo "($count)"; ?> </a>
                </div>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
         </div>
         <div id="mobile">
            <a href="#"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
         </div>
    </section>
    <div class="container">
        <div class="row">
            <div class='col-lg-12 text-center border rounded bg-light my-5' >
                <h1>My Cart</h1>
            </div>
    
        <div class="col-lg-8">
            <table class="table">
                <thead class="text-center">
                    <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php
                            $total = 0;
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr = $key + 1;
                                $total = $total + $value['Price'];
                                $_SESSION['total'] = $total;
                                echo"
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]</td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                            <input class='text-center' name='Mod_Quantity' onchange='this.form.submit()' type='number' value='$value[Quantity]' min='1' max='10'>
                                    <td>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                            <button name='Remove_Item' class='btn btn-small btn-outline-danger'>REMOVE</button>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            
                                        </form>
                                    </td>
                                </tr>
                                ";
                            }
                        }
                            ?>
                            
                    
                </tbody>
            </table>
        </div>

            <div class="col-lg-4">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total:</h4>
                    <h5 class = "text-right"><?php echo $total ?></h5>
                    <br>

                    <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0 )
                        {
                    ?>
                    <form action = "purchase.php" method="POST">
                        <div class="form-group">
                            <label>Full-Name</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Your Name"  required >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required >
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone_no" class="form-control" placeholder="Your Phone Number" required >
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Your Address" required>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pay_mode1" value="COD" >
                            <label class="form-check-label" for="exampleRadios1">
                                Cash On Delievery 
                            </label>
                        </div>  
                        <br>
                        <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pay_mode2" value="OnlinePayment" >
                                    <label class="form-check-label" for="exampleRadios2">
                                        Razorpay Payment
                                    </label>
                        </div>
                         <br>
                            
                        <button class="btn btn-primary btn-block" name ='purchase' >Buy Now</button>
                    </form>
                    <?php
                        }
                    ?>

                    
                 

                </div>
            </div>


        </div>
    </div>

    <script>
        function Logout(){
            alert("User has logged out");
        }
        </script>
 
</body>

</html>


