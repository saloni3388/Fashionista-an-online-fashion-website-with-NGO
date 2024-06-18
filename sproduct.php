<!DOCTYPE html>
<html lang="en">
<head>
    <meta cha₹ et="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fashionista.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <title>Fashionista</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
    margin: 0;
    padding: 0;
    font-family: 'Spartan',sans-serif;
}
        #prodetails{
    display: flex;
    margin-top: 20px;
}

#prodetails  .single-pro-image{
    width: 35%;
    margin-right: 50px;
}

.small-img-group{
    display: flex;
    justify-content: space-between ;
}

.small-img-col{
    flex-basis: 24%;
    cursor: pointer;

}

#prodetails .single-pro-details{
    width: 50%;
    padding-top: 30px;
}

#prodetails .single-pro-details h4{
    padding: 40px 0 20px 0;
}

#prodetails .single-pro-details span{
    font-size: 17px;
    line-height: 20px;
    word-spacing: 2px;
}

#prodetails .single-pro-details h2{
    font-size: 26px;
}
#prodetails .single-pro-details select{
    display: block;
    padding: 5px 10px;
    margin-bottom: 10px;
}

#prodetails .single-pro-details input{
    width: 50px;
    height: 40px;
    padding-left: 10px;
    font-size: 14px;
    margin-right: 10px;
}

#prodetails .single-pro-details input:focus{
    outline: none;

}

#prodetails .single-pro-details button{
    background: #088178;
    color: #fff;
}

.section-p1 {
    padding: 40px 45px;
}

.section-p3 {
    padding: 15px 45px;
}

.section-p1a {
    padding: 40px 100px 20px 100px;
}


@media(max-width: 477px){
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
    .section-p1{
        padding: 20px;
    }
}
    </style>
</head>
<body>
    <section id="header">
        <a href="#"><img src="UrbanFashionImg/logo1.png" class="logo" alt="fashionista_logo"></a>
         <div>
            <ul id="navbar">
                <li><a href="Fashionista2.html">Home</a></li>
                <li><a class="active" href="shop.html">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">NGO</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Logout</a></li>
                <li id="lg-bag"><a href="mycart.php"><i class="fas fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
         </div>
         <div id="mobile">
            <a href="#"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
         </div>
    </section>

<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="UrbanFashionImg/products/f1.jpg" width="100%" id="MainImg" alt="">
   
    <div class="small-img-group">
        <div class="small-img-col">
            <img src="UrbanFashionImg/products/f1.jpg" width="100%" class="small-img"  alt="">
        </div>

        <div class="small-img-col">
            <img src="UrbanFashionImg/products/f2.jpg" width="100%" class="small-img"  alt="">
        </div>

        <div class="small-img-col">
            <img src="UrbanFashionImg/products/f3.jpg" width="100%" class="small-img"  alt="">
        </div>

        <div class="small-img-col">
            <img src="UrbanFashionImg/products/f4.jpg" width="100%" class="small-img"  alt="">
        </div>
      </div>
    </div>
    <div class="single-pro-details">
        <h6>Home / T-Shirt</h6>
        <h4>Men's Fashion T-Shirt</h4>
        <h2>₹350</h2>
        <select>
            <option>Select Size</option>
            <option>XL</option>
            <option>XXL</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
        </select>
        <input  type="number"  value="1">
        <button class="normal">Buy Now</button>
        <h4>Product Details</h4>
        <span>Ariser Shirts has a slim collar, A full button Placket, full sleeved, and a curved hemline
            A Slim fit is cut closer through the chest, sleeves and waist. High quality interlining for a crisp collor and cuff
            Features slim armholes and sleeves, Premium Cotton Rich for all Day Comfort.
            Made From 100% Premium Cotton Rich Fabric
            Elevate your looks and also keep comfortable. Ariser Slim fit shirt are suited for any occasion from a day to the office to a night and also in traditional outfits
            </span>
    </div>
    </section>

    <!-- <section id="product1" class="section-p3">
        <h2>Featured Products</h2>
        <p>New collection with Modern Designs</p>
        <div class="pro-container">
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
        </div>
    </section> -->


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
            <a href="about.html">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col">
            <h4>Secured Payment Gateways</h4>
            <img src="UrbanFashionImg/pay/Razorpay.webp" class="logo" alt="">
        </div>

        <div class="copyright">
            <p>© 2022, Tech2 - All rights reserved </p>
        </div>
    </footer>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }

    </script>
    <script src="script.js"></script>
   
</body>
</html>
