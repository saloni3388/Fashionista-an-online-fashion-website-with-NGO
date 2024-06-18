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
        /* Shop page */
        @import url('https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap');

        *{
            margin: 0;
            padding: 0;
            font-family: 'Spartan',sans-serif;
        }
        #page-header{
            background-image: url("UrbanFashionImg/banner/b1.jpg");
            width: 100%;
            height: 37vh;
            background-size: cover;
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            padding: 14px;
            margin-bottom: 25px;
        }

        #page-header h2,
        #page-header p{
            color: #fff;
        }

        #pagination{
            text-align: center;
            margin: 10px 0px 20px 0;
        }

        #pagination a{
            text-decoration: none;
            background-color: #088178;
            padding: 15px 20px;
            border-radius: 4px;
            color: #fff;
            font-weight: 600;
        }

        #pagination a i{
            font-size: 16px;
            font-weight: 600;
        }

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

        .section-p1a {
            padding: 40px 100px 20px 100px;
        }

        footer{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        footer .col{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        footer .logo{
            margin-bottom: 30px;
        }

        footer h4{
            font-size: 17px;
            padding-bottom: 20px;
        }

        footer p{
            font-size: 16px;
            margin: 0 0 8px 0;
        }

        footer a{
            font-size: 16px;
            text-decoration: none;
            color: #222;
            margin-bottom: 10px;
        }

        footer .follow{
            margin-top: 20px;
        }

        footer .follow i{
            color: #465b52;
            padding-right: 6px;
            cursor: pointer;
            font-size: 20px;
        }

        footer .follow i:hover,footer a:hover{
            color: #088178;
        }

        footer .copyright{
            width: 100%;
            text-align: center;
        }

        #product1 .card{
            width: 21%;
            min-width: 330px;
            padding: 10px 12px;
            border: 2px solid #cce7d0;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 20px 20px 30px rgba(0,0,0,0.02);
            margin: 25px 0px;
            transition: 0.2s ease;
            position: relative;
        }

        .section-p2 {
            padding: 0px 70px 0px 85px;
        }

        #product .card:hover{
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
        }

        #product1 .card img{
            width: 100%;
            border-radius: 20px;
        }

        #product1 .card .card-body{
            text-align: start;
            padding: 10px 0;
        }

        #product1 .card .card-body h5{
            padding-top: 7px;
            color: #1a1a1a;
            font-size: 16px;
            font-weight: bold;
        }

        #product1 .card .card-body .card-text{
            padding-top: 5px;
            font-size: 15px;
            font-weight: 700;
            color: #088178;
        }


        /* #product1 .col-lg-3{
            padding-top: 100px;
        } */
        /* Start media query */
        @media(max-width: 799px){

            .container .head{
                padding: 0 10px;
            }

            .container .para{
                padding: 0 90px;
                line-height: 150%;
            }

            .featuredPropBox ul li {
                margin: 15px;
                width: 42%;
                
            }

            #contact-details.section-p1a {
                /* padding: 0px 20px; */
                padding: 40px 40px 20px 30px;
            }


            .section-p1{
            padding: 40px 40px;
            }

            .logo{
            height: 1.5cm;
            width:  4.5cm;
            cursor: pointer;
            }

            #header{
            padding: 40px 80px;

            }
            #navbar{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start; 
            position: fixed;
            top: 0;
            right: -300px;
            height: 100vh;
            width: 300px;
            background-color: #E3E6F3;
            box-shadow : 0 40px 60px rgba(0, 0, 0, 0.1);
            padding: 80px 0 0 10px;
            transition: 0.3s;
            }

            #navbar.active{
            right: 0px;
            }
            #navbar li {
            margin-bottom: 25px;
            }

            #mobile{
            display: flex;
            align-items: center;
            }

            #mobile i{
            color: #1a1a1a;
            font-size: 24px;
            padding-left: 20px;
            }

            #close{
            display: initial;
            position: absolute;
            top: 30px;
            left: 30px;
            color: #222;
            font-size: 24px;
            }

            #lg-bag{
            display: none;   
            }

            #hero{

            height: 70vh;
            background-position: top 30% right 30%;
            padding: 0 80px;
            }

            #feature {
            justify-content: center;
            }

            #feature .fe-box{
            margin: 15px 15px;
            }

            #product1 .pro-container{
            justify-content: center;
            }

            #product1 .pro{
            margin: 15px;
            }

            #product2 .pro1{
            margin: 15px;
                width: 21%;
                min-width: 430px;
            }

            #product2 .pro1 .des1 .btn{

            font-size: 21px;


            }

            #product2 .pro1 .des1 h5{
            font-size: 23px;
            }
            #banner{
            height: 40vh;
            }

            #banner3{
            padding: 0 120px;
            }

            #banner3 .banner-box{
            width: 120%;
            }

            #banner4{
            font-size: 25px;
            height: 15vh;
            }

            #navbar li a{
            font-size: 25px ;
            }

            #banner1{
            height: 40vh;
            }

            #page-header.ngo-header{
                height: 70vh;
                background-position: top 30% right 30%;
                padding: 0 80px;
            }

            #form-details{
                padding: 40px;
            }

            #form-details form{
                width: 50%;
            }

            #form-details form input,
            #form-details form textarea{
                width: 87%;
            }

            #product1 .card{
                    min-width: 430px;
                    margin: 30px 70px;
            }

            #product1 .card .card-body h5{
                padding-top: 7px;
                color: #1a1a1a;
                font-size: 20px;
                font-weight: bold;
            }

            #product1 .card .card-body .card-text{
                padding-top: 5px;
                font-size: 18px;
                font-weight: 700;
                color: #088178;
            }

            }

        

        @media(max-width: 477px){
            .section-p1{
                padding: 20px;
            }

            #banner1{
                height: 40vh;
            }

            #banner1 h4{
                padding: 10px 14px 10px 0px;
            }

            #banner1 p{
                font-size: 15px;
                font-weight: 500;
                padding: 10px 12px 10px 0px;
            }

            #navbar li a{
                font-size: 21px ;
            }

            .logo{
                height: 1.2cm;
                width:  3.2cm;
                cursor: pointer;
            }

            #header{
                padding: 10ps 30px;;
            }

            h1{
                font-size: 38px;
            }

            h2{ 
                font-size: 32px;
            }



            #hero{
                padding: 0 20px;
                background-position: 55%;
            }

            #feature{
                justify-content: space-between;
            }

            #feature .fe-box{
                width: 125px;
                margin: 0 0 15px 0;
            }

            #product1 .pro{
                width: 100%;
            }

            #banner{
                height: 40vh;
            }

            #banner3{
                padding: 0 20px;
            }

            #banner3 .banner-box{
                width: 100%;
            }

            #banner4{
                font-size: 18px;
                height: 12vh;
            }
            #header{
                /* padding: 0px 20px 0px 80px ; */
                padding: 30px 30px 30px 20px;
            }

            #prodetails {
                display: flex;
                flex-direction: column;
                margin-left: -10px;
            }

            #prodetails .single-pro-image {
                width: 100%;
                margin-right: 0px;
            }

            #prodetails .single-pro-details {
                width: 100%;
            }

            #about-head{
                flex-direction: column;
            }

            #about-head img{
                width: 100%;
                margin-bottom: 20px;
            }

            #about-head div{
                padding-left: 0px;
            }

            #blog .blog-box {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            #blog {
                padding: 100px 20px 0 20px;
                background-color: #f0e9aa;
            }

            #blog .blog-img {
                width: 95%;
                margin-right: 0px;
                margin-bottom: 30px;
            }

            #blog .blog-details {
                width: 100%;
            }

            #page-header.ngo-header{
                padding: 0 20px;
                background-position: 55%;
            }

            #page-header{
                
                width: 91%;
            }
            .container .head{
                padding: 0 10px 0 0;
                font-size: 32px;
            }

            .container .para{
                padding: 0 15px 0 0;
                line-height: 150%;
            }

            .featuredPropBox ul li {
                margin: 15px;
                width: 80%;
            }

            .ngohead{
                font-size: 30px;
            }

            #contact-details{
                flex-direction: column;
            }

            #contact-details .details{
                width: 100%;
                margin-bottom: 30px;
            }

            #contact-details .map{
                width: 100%;
            }

            #form-details {
                margin: 10px 18px 10px 10px;
                padding: 30px 10px;
                flex-wrap: wrap;
            }

            #form-details form{
                width: 100%;
                margin-bottom: 30px;
            }


            #product2 .pro1{
            margin: 15px;
                width: 21%;
                min-width: 300px;
            }

            #product2 .pro1 .des1 .btn{
            font-size: 15px;
            }

            #product2 .pro1 .des1 h5{
            font-size: 16px;
            }

            #product1 .card{
                    min-width: 300px;
                    margin: 30px -60px;
            }

            #product1 .card .card-body h5{
                padding-top: 7px;
                color: #1a1a1a;
                font-size: 17px;
                font-weight: bold;
            }

            #product1 .card .card-body .card-text{
                padding-top: 5px;
                font-size: 15px;
                font-weight: 700;
                color: #088178;
            }

            #page-header{
                width: 100%;
            }
            }




    </style>
</head>
<body>
    <section id="header">
        <a href="#"><img src="UrbanFashionImg/logo1.png" class="logo" alt="fashionista_logo"></a>
         <div>
            <ul id="navbar">
                <li><a href="Fashionista.php">Home</a></li>
                <li><a class="active" href="shopbeforelogin.php">Shop</a></li>
                <li><a href="blogbeforelogin.php">Blog</a></li>
                <li><a href="ngobeforelogin.php">NGO</a></li>
                <li><a href="aboutbeforelogin.php">About</a></li>
                <li><a href="loginrenew.php">Login</a></li>
                <!-- <li id="lg-bag"><a href=""><i class="fas fa-shopping-bag"></i></a></li> -->
                <div>
                    <?php
                    $count = 0;
                    if(isset($_SESSION['cart']))
                    {
                        $count = count($_SESSION['cart']);

                    }
                    ?>
                    <a href= "#" onclick="Login()" class="btn btn-outline-success"> My Cart <?php echo "($count)"; ?></a>
                </div>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
         </div>
         <div id="mobile">
            <a href="#"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
         </div>
    </section>

    <section id="page-header">
        <h2>#stayhome</h2>
        <p>Save more with coupons & upto 70% off!</p> 
    </section>
 
    <section id="product1" class="section-p2">
        <div class="pro-container">
        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/f1.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Puma Astronaut T-Shirts</h5>
                    <p class="card-text">₹ 600</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Puma Astronaut T-Shirts"></input>
                    <input type="hidden" name="Price" value="600">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/f2.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Nike Cool T-Shirts</h5>
                    <p class="card-text">₹ 650</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Nike Cool T-Shirts"></input>
                    <input type="hidden" name="Price" value="650">
                </div>
        </div>
        </form>
        </div>


        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/f3.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Clown Man T-Shirts</h5>
                    <p class="card-text">₹ 690</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Clown Man T-Shirts"></input>
                    <input type="hidden" name="Price" value="690">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/f4.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Polo Astronaut T-Shirts</h5>
                    <p class="card-text">₹ 1000</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Polo Astronaut T-Shirts"></input>
                    <input type="hidden" name="Price" value="550">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/f5.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Gucci Half-Sleeves Shirts</h5>
                    <p class="card-text">₹ 550</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Gucci Half-Sleeves Shirts"></input>
                    <input type="hidden" name="Price" value="550">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/f6.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Nike Shirt</h5>
                    <p class="card-text">₹ 850</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Nike Shirt"></input>
                    <input type="hidden" name="Price" value="850">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/f7.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Lyra Trouser</h5>
                    <p class="card-text">₹ 400</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Lyra Trouser"></input>
                    <input type="hidden" name="Price" value="400">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/f8.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Emrald Top</h5>
                    <p class="card-text">₹ 5000</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Emrald Top"></input>
                    <input type="hidden" name="Price" value="5000">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/n1.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Plain Blue Tshirt</h5>
                    <p class="card-text">₹ 1550</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Plain Blue Tshirt"></input>
                    <input type="hidden" name="Price" value="1550">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/1c.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Aesthetic Blue T-shirt</h5>
                    <p class="card-text">₹ 2000</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Aesthetic Blue T-shirt"></input>
                    <input type="hidden" name="Price" value="2000">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/6a.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Polo Winter Coat</h5>
                    <p class="card-text">₹ 550</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Polo Winter Coat"></input>
                    <input type="hidden" name="Price" value="550">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/n5.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Formal Blue Shirt</h5>
                    <p class="card-text">₹ 900</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Formal Blue Shirt"></input>
                    <input type="hidden" name="Price" value="900">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/n6.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Buffalo Slim Short</h5>
                    <p class="card-text">₹ 600</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Buffalo Slim Short"></input>
                    <input type="hidden" name="Price" value="600">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/23a.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Spa Cotton Shirt</h5>
                    <p class="card-text">₹ 700</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Spa Cotton Shirt"></input>
                    <input type="hidden" name="Price" value="700">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/24a.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Police White T-Shirts</h5>
                    <p class="card-text">₹ 550</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Police White T-Shirts"></input>
                    <input type="hidden" name="Price" value="550">
                </div>
        </div>
        </form>
        </div>
        
        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/b8.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Designer Crop Top</h5>
                    <p class="card-text">₹ 1000</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Designer Crop Top"></input>
                    <input type="hidden" name="Price" value="600">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/b10.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Designer Lehenga</h5>
                    <p class="card-text">₹ 2500</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Designer Lehenga"></input>
                    <input type="hidden" name="Price" value="700">
                </div>
        </div>
        </form>
        </div>

        <div class="col-lg-4">
        <form action="#" method="POST">
        <div class="card" >
                <img src="UrbanFashionImg/products/b19.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">The Cotton-Jersey Jacket</h5>
                    <p class="card-text">₹ 550</p>
                    <button onclick="Login()" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="The Cotton-Jersey Jacket"></input>
                    <input type="hidden" name="Price" value="550">
                </div>
        </div>
        </form>
        </div>
            <!-- <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="UrbanFashionImg/products/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct2.html';">
                <img src="UrbanFashionImg/products/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct3.html';">
                <img src="UrbanFashionImg/products/f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct4.html';">
                <img src="UrbanFashionImg/products/f4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct5.html';">
                <img src="UrbanFashionImg/products/f5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct6.html';">
                <img src="UrbanFashionImg/products/f6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct7.html';">
                <img src="UrbanFashionImg/products/f7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct8.html';">
                <img src="UrbanFashionImg/products/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct9.html';">
                <img src="UrbanFashionImg/products/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct10.html';">
                <img src="UrbanFashionImg/products/1c.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct11.html';">
                <img src="UrbanFashionImg/products/6a.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct12.html';">
                <img src="UrbanFashionImg/products/8a.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct13.html';">
                <img src="UrbanFashionImg/products/n5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct14.html';">
                <img src="UrbanFashionImg/products/n6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct15.html';">
                <img src="UrbanFashionImg/products/23a.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='sproduct16.html';">
                <img src="UrbanFashionImg/products/24a.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                   
                    <h4>₹ 78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div> -->
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="shopbeforelogin.php">1</a>
        <a href="shop1beforelogin.php">2</a>
        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
    </section>

    <section id="banner4">
            <marquee>Relax and let Fahionista help you to explore your true style. </marquee>
    </section>

        <footer class="section-p1a">
            <div class="col">
               <img src="UrbanFashionImg/logo1.png" class="logo" alt="fashionista_logo"> 
               <h4>Contact</h4>
               <p><strong>Address: </strong> 562 Wellington Road, Street 32, San Francisco</p>
               <p><strong>Phone: </strong> +01 2222 365 /(+91) 01 2345 6789</p>
               <p><strong>Hou₹ : </strong> 10:00 - 18:00, Mon - Sat</p>
               <div class="follow">
                    <h4>Follow us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
               </div>
            </div>

            <div class="col">
            <h4>About</h4>
            <a href="aboutbeforelogin.php">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contactbeforelogin.php">Contact Us</a>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <a href="loginrenew.php">Sign In</a>
                <a href="#" onclick="Login()">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="contactbeforelogin.php">Help</a>
            </div>

            <div class="col">
                <h4>Secured Payment Gateways</h4>
                <img src="UrbanFashionImg/pay/Razorpay.webp" class="logo" alt="">
            </div>

            <div class="copyright">
                <p>© 2022, Tech2 - All rights reserved </p>
            </div>
        </footer>

    <script src="script.js"></script>
    <script>
        function Login(){
            alert("You have to Login to add to the Cart or buy Products!!")
        }
    </script>
    
</body>
</html>