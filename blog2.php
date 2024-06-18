<!DOCTYPE html>
<html lang="en">
<head>
    <meta cha₹ et="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fashionista.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="UrbanFashionImg/favicon.ico">
    <title>Fashionista</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap');

        *{
            margin: 0;
            padding: 0;
            font-family: 'Spartan',sans-serif;
        }

        .logo{
            height: 1cm;
            width:  3cm;
            cursor: pointer;
        }

        #header{
            display: flex;
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

        #navbar{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 80px ;
            background: #e3e6f3;
            box-shadow: 0px 5px 15px rgba(129, 150, 243, 0);
            margin: 0;
        }

        #navbar li{
            list-style: none;
            padding: 0 20px;
            position: relative;
        }

        #navbar li a{
            text-decoration: none;
            font-size: 14px ;
            font-weight: 600;
            color: #1a1a1a;
            transition: 0.3s ease;
        }

        #navbar li a:hover,
        #navbar li a.active{
            color:#088178;
        }

        #navbar li a.active::after,
        #navbar li a:hover::after
        {
            content: "";
            width: 30%;
            height: 2px;
            background: #088178;
            position: absolute;
            bottom: -4px;
            left: 20px;
        }

        #hero{
            background-image: url("UrbanFashionImg/hero4.png");
            height: 90vh;
            width: 87.35%;
            background-size: cover;
            background-position: top 25% right 0;
            padding: 0 80px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        #mobile{
            display: none;
            align-items: center;

        }

        #close{
            display: none;
        }

        #hero h1{
            color: #088178;
        }

        #hero h4{
            padding-bottom: 15px;
        }

        #hero button{
            background-image: url("UrbanFashionImg/button.png");
            background-color:transparent ;
            color: #088178;
            border: 0;
            padding: 14px 80px 14px 65px;
            background-repeat: no-repeat;
            cursor: pointer;
            font-weight: 700;
            font-size: 15px;
        }

        /* .navbar{
            width: 100%;
            height: 15vh;
            margin: auto;
            display: flex;
            align-items: center;
        }

        .cart1{
            height: 1cm;
            width: 1cm;
            cursor: pointer;
            margin-left: -0.9cm;
        }

        nav{
            flex: 1;
            display: flex;
            align-items: center;
            padding-left: 60px;
            margin-left: 11.4cm;
        }

        nav ul li{
            display: inline-block;
            list-style: none;
            margin: 0px 18px;
        }
        nav ul li a{
            text-decoration: none;
            color: #333;
        } */

        .content h1{
            font-size: 60px;
            font-weight: 100;
            margin-top: 24px;
            margin-bottom: 15px;
            color: #232d60;
        }

        .content p{
            font-size: 20px;
            color: #6a7199;
        }

        .content{
            margin-left: 10%;
            margin-top: 10%;
        }

        .content .btn
        {
            display: inline-block;
            background: linear-gradient(45deg,#87adfe,#ff77cd);
            border-radius: 6px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            box-shadow: 3px 8px 22px rgba(94,28,2,0.15);
        }

        .arrow-icons
        {
            margin-top: 40px;
            display: flex;
        }

        .arrow-icons img{
            width: 40px;
            margin-right: 25px ;
        }

        .feature-img
        {
            height: 90%;
            position: absolute;
            bottom: 0;
            right: 160px;
        }

        .Social
        {
            transform:rotate(270deg);
            position: absolute;
            left: -80px;
            bottom:180px
        }

        .Social a{
            text-decoration: none;
            color:#6a7199;
            padding: 0px 20px 0px 0px;
            font-size: 14px;
        }
        h1 {
            font-size: 50px;
            line-height: 64px;
            color: #222;
        }

        h2 {
            font-size: 46px;
            line-height: 54px;
            color: #222;
        }

        h4 {
            font-size: 20px;
            color: #222;
        }

        h6 {
            font-weight: 700;
            font-size: 12px;
        }

        p {
            font-size: 16px;
            color: #465b52;
            margin: 15px 0 20px 0;
        }

        .section-p1 {
            padding: 40px 45px;
        }

        .section-p2 {
            padding: 0px 45px;
        }

        .section-p3 {
            padding: 15px 45px;
        }

        .section-p1a {
            padding: 40px 100px 20px 100px;
        }

        .section-m1 {
            margin: 40px 0;
        }

        button.normal{
            font-size: 14px;
            font-weight: 600;
            padding: 15px 30px;
            color: #000;
            background-color: #fff;
            border-radius: 4px;
            cursor: pointer;
            border: none;
            outline: none;
            transition: 0.2s;
        }
        #feature{
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        #feature .fe-box{
            width: 151px;
            text-align: center;
            padding: 25px 15px;
            box-shadow: 20px 20px 34px rgba(0,0,0,0.03 );
            border: 1px solid #cce7d0;
            border-radius: 4px;
            margin: 15px 0;
        }

        #feature .fe-box:hover{
            box-shadow: 10px 10px 54px rgba(0,0,0,0.03 );

        }

        #feature .fe-box img{
            width: 100%;
            margin-bottom: 10px;
        }

        #feature .fe-box h6{
            padding: 9px 8px 10px 8px ;
            line-height: 1;
            border-radius: 4px;
            color: #088178;
            background-color: #fddde4;
        }

        #product1{
            text-align: center;
        }

        #product1 .pro-container{
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            flex-wrap: wrap;
        }

        #product1 .pro{
            width: 21%;
            min-width: 250px;
            padding: 10px 12px;
            border: 1px solid #cce7d0;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 20px 20px 30px rgba(0,0,0,0.02);
            margin: 15px 0px;
            transition: 0.2s ease;
            position: relative;
        }

        #product .pro:hover{
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
        }

        #product1 .pro img{
            width: 100%;
            border-radius: 20px;
        }

        #product1 .pro .des{
            text-align: start;
            padding: 10px 0;
        }

        #product1 .pro .des span{
            color: #606063;
            font-size: 12px;
        }

        #product1 .pro .des h5{
            padding-top: 7px;
            color: #1a1a1a;
            font-size: 14px;
        }

        #product1 .pro .des i{
            font-size: 12px;
            color: rgb(243, 181, 25);
        }

        #product1 .pro .des h4{
            padding-top: 7px;
            font-size: 15px;
            font-weight: 700;
            color: #088178;
        }

        #product1 .pro .cart {
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50px;
            background-color: #e8f6ea;
            font-weight: 600;
            color: #088178;
            border: 1px solid #cce7d0;
            position: absolute;
            bottom: 20px;
            right: 10px;
        }

        #banner{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-image: url("UrbanFashionImg/banner/b2.jpg");
            width: 100%;
            height: 52vh;
            background-size: cover;
            background-position: center;

        }

        #banner h4{
            color: #fff;
            font-size: 23px;
        }

        #banner h2{
            color: #fff;
            font-size: 30px;
            padding: 10px 0;
        }

        #banner h2 span {
            color: #ef3636;
            
        }

        #banner button:hover{
            background: #088178;
            color: #ffff;
        }

        /* #sm-banner .banner-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-image: url("UrbanFashionImg/banner/b17.jpg");
            width: 100%;
            height: 40vh;
            background-size: cover;
            background-position: center;
        }
        */

        #banner1{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-image: url("UrbanFashionImg/p18.jpeg");
            width: 100%;
            height: 70vh;
            background-size: cover;
            background-position: center;

        }

        #banner1 h4{
            color: #fff;
            font-size: 23px;
            word-spacing: 2px;
            letter-spacing: 1px;
        }

        #banner1 p{
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            letter-spacing: 1px;
            word-spacing: 2px;
            padding: 10px 0;
        }

        #banner1 h4 span {
            color: #a8ff05;
        }

        #banner1 button:hover{
            background: #088178;
            color: #ffff;
        }

        #banner3{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 80px;
        }
        #banner3 .banner-box{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            background-image: url("UrbanFashionImg/banner/b7.jpg");
            min-width: 29%;
            height: 30vh;
            background-size: cover;
            background-position: center;
            margin: 20px;
            margin-bottom: 20px;
        }

        #banner3 .banner-box2{
            background-image: url("UrbanFashionImg/banner/b4.jpg");
        }

        #banner3 .banner-box3{
            background-image: url("UrbanFashionImg/banner/b18.jpg");
        }

        #banner3 h2{
            color: #fff;
            font-weight: 900;
            font-size: 20px;
            font-family: 'Spartan',sans-serif;
            padding-left: 20px;
        }

        #banner3 h3{
            color: #a8ff05;
            font-weight: 700;
            font-size: 13px;
            font-family: 'Spartan',sans-serif;
            padding-left: 20px;
        }

        #banner4{
            color: #fff;
            font-size: 18px;
            word-spacing: 3px;
            display: flex;
            align-items: center;
            font-family: 'Spartan',sans-serif;
            height: 20vh;
            background-image: url("UrbanFashionImg/banner/b14.png");
            background-repeat: no-repeat;
            background-position: 20% 30%;
            background-color: #041e42;
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
            font-size: 15px;
            padding-bottom: 20px;
        }

        footer p{
            font-size: 14px;
            margin: 0 0 8px 0;
        }

        footer a{
            font-size: 14px;
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
            font-size: 18px;
        }

        footer .follow i:hover,footer a:hover{
            color: #088178;
        }

        footer .copyright{
            width: 100%;
            text-align: center;
        }

        /* Shop page */
        #page-header{
            background-image: url("UrbanFashionImg/banner/b1.jpg");
            width: 97.81%;
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

        /* sproduct */

        #prodetails{
            display: flex;
            margin-top: 20px;
        }

        #prodetails  .single-pro-image{
            width: 41%;
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
            font-size: 13.5px;
            line-height: 20px;
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

        /* About Page */
        #page-header.about-header{
            background-image: url("UrbanFashionImg/about/banner.png");
        }

        #about-head{
            display: flex;
            align-items: center;
        }

        #about-head img{
            width: 50%;
            height: auto;
        }

        #about-head div{
            padding-left: 40px;
        }

        /* CONTACT PAGE */
        #contact-details {
            display: flex;
            align-items: center;
            justify-content: space-between;
        } 

        #contact-details .details {
            width: 40%;
        }

        #contact-details .details span {
            font-size: 12px;
            /* padding: 0 40px; */
        }

        #contact-details .details h2,
        #form-details form h2 {
            font-size: 26px;
            line-height: 35px;
            padding: 20px 0px;
        }

        #contact-details .details h3 {
            font-size: 16px;
            padding-bottom: 15px;
            /* padding-left: 40px; */
        }

        #contact-details .details li {
            list-style: none;
            display: flex;
            padding: 10px 0;
        }

        #contact-details .details li i{
            font-size: 14px;
            padding-right: 22px;
        }

        #contact-details .details li p{
            margin: 0;
            font-size: 14px;
        } 

        #contact-details .map{
            width: 55%;
            height: 400px;
        }

        #contact-details .map iframe {
            width: 100%;
            height: 100%;
        }

        #form-details{
            display: flex;
            justify-content: space-between;
            margin: 30px 90px 30px 90px;
            padding: 80px;
            border: 1px solid #e1e1e1;
        }



        #form-details form{
            width: 65%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        #page-header.about-header {
            background-image: url("UrbanFashionImg/about/banner.png");
        }

        #page-header.about-header h2 {
        color: #ffffff;
        }

        #page-header.about-header p{
            color: #ffffff;
        }

        #form-details form input,
        #form-details form textarea{
            width: 100%;
            padding: 12px 15px;
            outline: none;
            margin-bottom: 20px;
            border: 1px solid #e1e1e1;
        }

        #form-details form button{
            background-color: #088178;
            color: #fff;
            padding: 10px 40px;
            border-radius: 5px;
        }

        #form-details .people div{
            padding-bottom: 25px;
            display: flex;
            align-items: flex-start;
        }

        #form-details .people div img{
            width: 65px;
            height: 65px;
            object-fit: cover;
            margin-right: 15px;
        }

        #form-details .people div p{
            margin: 0;
            font-size: 13px;
            line-height: 25px;
        }

        #form-details .people div p span{
            display: block;
            font-size: 16px;
            font-weight: 600;
            color: #000;
        }

        /* blog page */

        #page-header.blog-header{
            background-image: url("UrbanFashionImg/banner/b19.jpg");
        }

        #page-header.blog-header h2{
            color: #ffffff;
        }

        #page-header.blog-header p{
            color: #ffffff;
        }



        #blog{
            padding: 150px 150px 0 150px
        }

        #blog .blog-box{
            display: flex;
            align-items: center;
            width: 100%;
            position: relative;
            padding-bottom: 90px;
        }

        #blog .blog-img{
            width: 50%;
            margin-right: 40px;
        }

        #blog img{
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        #blog .blog-details{
            width: 50%;
        }

        #blog .blog-details a{
            text-decoration: none;
            font-size: 11px;
            color: #000;
            font-weight: 700;
            position: relative;
            transition: 0.3s;
        }

        #blog .blog-details a::after{
            content: "";
            width: 50px;
            height: 1px;
            background-color: #000;
            position: absolute;
            top: 4px;
            right: -60px;
        }

        #blog .blog-details a:hover {
            color: #088178;
        }

        #blog .blog-details a:hover::after{
            background-color: #088178;
        }

        #blog .blog-box h1{
            position: absolute;
            top: -40px;
            left: 0;
            font-size: 70px;
            font-weight: 700;
            color: #c9cbce;
            z-index: -9;
        }

        /* NGO Page */
        #product2{
            text-align: center;
        }

        #product2 .pro-container1{
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            flex-wrap: wrap;
        }

        #product2 .pro1{
            width: 21%;
            min-width: 330px;
            padding: 10px 12px;
            border: 1px solid #cce7d0;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 20px 20px 30px rgba(0,0,0,0.02);
            margin: 15px 0px;
            transition: 0.2s ease;
            position: relative;
        }

        #product2 .pro1:hover{
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
        }

        #product2 .pro1 img{
            width: 100%;
            border-radius: 20px;
        }

        #product2 .pro1 .des{
            text-align: start;
            padding: 10px 0;
        }

        #product2 .pro1 .des1 .btn{
            margin-top: 5%;
            margin-left: 37%;
            font-size: 15px;
            padding: 5px 15px;
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
            display: inline-block;
            font-weight: 600;
            user-select: none;
            border: 1px solid transparent;
            cursor: pointer;
            line-height: 1.5;
            border-radius: .25rem;

        }

        #product2 .pro1 .des1 .btn:hover{
            color:#17a2b8;
            background-color: #fff;
            border: 2px solid #17a2b8;
        }
        #product2 .pro1 .des1 h5{
            text-align: center;
            padding-top: 7px;
            color: #1a1a1a;
            font-size: 20px;
        }


        #page-header.ngo-header {
            height: 75vh;
            background-image: url("UrbanFashionImg/ngo1.jpeg");
            width: 87.36%
        }

        #page-header.ngo-header h2 {
        color: #ffffff;
        }

        #page-header.ngo-header p{
            color: #ffffff;
        }

        #page-header.ngo-header p span{
            font-weight: bold;
            color: #a8ff05;
        }

        a:hover {
            text-decoration: none;
        }

        .np {
            padding: 0px;
        }


        .featuredPropBox ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            list-style: outside none none;
            padding: 0;
        }

        .featuredPropBox ul li {
            background-color: #eeeeee;
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            display: block;
            height: 250px;
            margin: 5px;
            border-radius: 25px;
            width: 23%;
            /* background-image: linear-gradient(30deg, rgba(158,204,104,1), rgba(121,173,61,1)); */
            position: relative;
            transition: all 0.3s;
            cursor: pointer;
        }

        .featuredPropBox ul li:after {
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            /* background-image: linear-gradient(to right, rgba(158,204,104,1), rgba(121,173,61,1)); */
            background-color: #088178;
            border-radius: 25px;
            /* background-color: rgba(22, 22, 22, 0.6); */
            transition: all 0.3s;
        }



        .featuredPropBox ul li .fplogo {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 60%;
            z-index: 1;
            transition: all 0.3s;
        }



        .featuredPropBox ul li .fptext {
            display: none;
            font-size: 16px;
            left: 50%;
            position: absolute;
            text-align: center;
            top: 50%;
            border-radius: 25px;
            transform: translate(-50%, -50%);
            transition: all 0.3s ease 0s;
            width: 65%;
            z-index: 1;
        }

        .featuredPropBox ul li .fptext p {
            color: #fff;
            margin: 0px;
        }

        .featuredPropBox ul li:hover {
            box-shadow: 0 0 0 30px rgba(0, 0, 0, 0.9) inset;
            /* border-radius: 25px; */
        }

        .featuredPropBox ul li:hover:after {
            background-color: rgba(8, 129, 120,0.7)
            /* border-radius: 25px; */
            /* background-color: #79AD3D; */
        }

        .featuredPropBox ul li:hover .fplogo {
            display: none;
        }

        .featuredPropBox ul li:hover .fptext {
            display: block;
        }

        .container .head{
            margin-top: 50px;
            text-align: center;
            font-size: 40px;
            color: #222;
        }

        .container .para{
            text-align: center;
            font-size: 15px;
            margin-bottom: 40px;
            color: #222;
        }
        .container .fplogo h2{
            margin-top: 0px;
            color: #fff;
            text-align: center;
            font-size: 40px;
        }

        .ngohead{
            margin-top: 50px;
            font-size: 40px;
        }

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
        }




    </style>
</head>

<body>

    <section id="header">
        <a href="#"><img src="UrbanFashionImg/logo1.png" class="logo" alt="fashionista_logo"></a>
         <div>
            <ul id="navbar">
                <li><a href="Fashionistaafterlogin.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a class="active" href="blog.php">Blog</a></li>
                <li><a href="ngobefore2000.php">NGO</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="loginrenew.php" onclick = "Logout()">Logout</a></li>
                <li id="lg-bag"><a href="mycart.php"><i class="fas fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
         </div>
         <div id="mobile">
            <a href="#"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
         </div>
    </section>

    <section id="page-header" class="blog-header">
        <h2>#read more</h2>
        <p>Read all case studies about our products!</p> 
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="UrbanFashionImg/blog/b8.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Crop Top</h4>
                <p>The croptop (also cropped top), is a blouse that ends above the waist, called the cutoff line, 
                    and exposes some of the wearer's abdomen. A crop top may also be referenced as a half shirt, 
                    midriff, belly shirt, cutoff shirt, etc.  It is a shirt that has a length ending approximately 
                    at the navel.This type of shirt purposely shows portion of the wearers belley.</p>
                
            </div>
            <h1>14/01</h1>
        </div>

<div class="blog-box">
        <div class="blog-img">
            <img src="UrbanFashionImg/blog/b9.webp" alt="">
        </div>
        <div class="blog-details">
            <h4>Denim Jacket</h4>
            <p>A denim jacket, also called a jean jacket or trucker jacket, is a jacket made from denim. 
                It has been a popular type of casual apparel with both men and women and has been described 
                as an iconic element of American fashion.
            </p>
            
        </div>
        <h1>14/02</h1>
    </div>

    <div class="blog-box">
    <div class="blog-img">
        <img src="UrbanFashionImg/blog/b10.jpg" alt="">
    </div>
    <div class="blog-details">
        <h4>Designer Lehenga</h4>
            <p>This heavy weight crepe lehenga comes in rich and vibrant indian hues. 
                The main work is done with applique embroidery which gives a distinct touch to this amazing look. 
                It features a churidar dupatta instead of regular yoke and tikka for a perfect look. 
                The product is stitched with small open work buttons that adorn the bodice giving it extra elegance</p>
            
        
    </div>
    <h1>14/04</h1>
</div>

<div class="blog-box">
<div class="blog-img">
    <img src="UrbanFashionImg/blog/b11.jpg" alt="">
</div>
<div class="blog-details">
    <h4>Women's Kurti</h4>
        <p>The Kurti is designed using pure cotton, which makes it soft and breathable. The softness of the 
            fabric and its breathability give the dress a comfortable feel. The Kurti is fabricated with 3/4th 
            sleeves and intricate border at bottom to offer you an exceptionally alluring look. 
            Moreover,the boat neckline with frontal line add to its beauty.</p>
    
</div>
<h1>14/05</h1>
</div>

<div class="blog-box">
<div class="blog-img">
    <img src="UrbanFashionImg/blog/b12.jpg" alt="">
</div>
<div class="blog-details">
    <h4>Sherwani</h4>
    <p>Sherwani is a long-sleeved outer coat worn by men . Like the Western frock coat it is fitted,
         with some waist suppression; it falls to below the knees and is buttoned down the front. 
        To give it a regal and royal air, it is a long, knee-length coat-like jacket worn over a kurta and churidar, 
        pajama, or dhoti.</p>
    
</div>
<h1>14/06</h1>
</div>

<div class="blog-box">
<div class="blog-img">
    <img src="UrbanFashionImg/blog/b13.jpg" alt="">
</div>
<div class="blog-details">
    <h4>Men's kurta </h4>
    <p>The kurta is traditionally designed by cotton or silk. It is worn plain or with 
        embroidered decoration, such as chikan; and it can be loose or tight in the torso, 
        typically falling either just above or somewhere below the knees of the wearer.</p>
    
</div>
<h1>14/07</h1>
</div>

<div class="blog-box">
    <div class="blog-img">
        <img src="UrbanFashionImg/blog/b14.jpg" alt="">
    </div>
    <div class="blog-details">
        <h4>Palazzo Pant</h4>
        <p>Palazzo pants are popular as a summer season style, as they are loose and tend to be flattering in light, 
            flowing fabrics that are breathable in hot weather. Palazzo pants are less frequently seen during the 
            winter months,but they may be found in wool or heavy synthetic fabrics as well.</p>
        
    </div>
    <h1>14/08</h1>
    </div>

    </section>

    <section id="pagination" class="section-p1">
        <a href="blog.php">1</a>
        <a href="blog2.php">2</a>
        <a href="blog.php"><i class="fas fa-long-arrow-alt-right"></i></a>
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
            <a href="about.php">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.php">Contact Us</a>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <a href="loginrenew.php">Sign In</a>
                <a href="mycart.php">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="contact.php">Help</a>
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
        function Logout(){
            alert("User has logged out");
        }
        </script>
</body>
</html>