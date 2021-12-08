<nav class="navbar" >
    <div class="navbar-container container">
        <input type="checkbox" name="" id="">
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <div class="container-fluid">
            <div class="row mobnavvrow"  >
                <div class="col-sm-2" style="margin: auto;">
                    <!--<h1 class="logo" style="text-decoration: none; font-size:20px"><a href="index.php" style="color: #333;" >Order Karo</a></h1>-->
                    <a href="index.php" class="logolink"><img src="./images/logo.png" style="width:50px" alt="Order Karo"/></a> 
                </div>
                <div class="col-sm-10 mobnavv">
                    <ul class="menu-items">
                        <li>
                           <?php
                            include('searchbar.php');
                            ?>
                        </li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <!-- <li><a href="#food-menu">Menu</a></li>
                        <li><a href="#testimonials">Testimonial</a></li>
                        <li><a href="#contact">Contact</a></li> -->
                    </ul>
                </div>

            </div>
        </div>
    </div>
</nav>






<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    *,
    *::after,
    *::before {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }



    body {
        font-family: "Poppins", sans-serif;
    }

    /* ............/navbar/............ *

/* desktop mode............/// */

    .navbar input[type="checkbox"] 
    .navbar .hamburger-lines {
        display: none;
    }
    .col-sm-10 .menu-items{
            margin-bottom: 0 !important;
        }

    .navbar {
        box-shadow: 0px 5px 10px 0px #aaa;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        background: #fff;
        color: #000;
        opacity: 0.85;
        z-index: 12;
    }

    .navbar-container {
        display: flex;
        justify-content: space-between;
        height: 64px;
        align-items: center;
    }
.navbar input{
    display: none;
}
    .menu-items {
        order: 2;
        display: flex;
    }

    .menu-items li {
        list-style: none;
        margin-left: 2rem;
        margin-bottom: 0.5rem;
        font-size: 1.2rem;
        margin-top: auto;
        margin-bottom: auto;
    }

    .menu-items a {
        text-decoration: none;
        color: #444;
        font-weight: 500;
        transition: color 0.3s ease-in-out;
    }

    .menu-items a:hover {
        color: var(--green);
        transition: color 0.3s ease-in-out;
    }

    .logo {
        order: 1;
        font-size: 2rem;
        color: #444;
        font-weight: 500;
        position: inherit;
        margin: auto 0;
    }

    /* ......../ media query /.......... */

    @media (max-width: 768px) {
        .searchbar{
            display: none;
            padding: 0;
            margin: 0;
        }
        .mobnavv{
            transform: translateX(-160%);
            transition: transform 0.4s ease-in-out;

        }
        .mobnavvrow{
                height: 80px;
        }
        .menu-items{
            float: none;
        }
        .navbar {
            opacity: 0.95;
        }

        .navbar-container input[type="checkbox"],
        .navbar-container .hamburger-lines {
            display: block;
        }

        .navbar-container {
            display: block;
            position: relative;
            height: 64px;
        }

        .navbar-container input[type="checkbox"] {
            position: absolute;
            display: block;
            height: 32px;
            width: 30px;
            top: 20px;
            left: 20px;
            z-index: 5;
            opacity: 0;
        }

        .navbar-container .hamburger-lines {
            display: block;
            height: 23px;
            width: 35px;
            position: absolute;
            top: 17px;
            left: 20px;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .navbar-container .hamburger-lines .line {
            display: block;
            height: 4px;
            width: 100%;
            border-radius: 10px;
            background: #333;
        }

        .navbar-container .hamburger-lines .line1 {
            transform-origin: 0% 0%;
            transition: transform 0.4s ease-in-out;
        }

        .navbar-container .hamburger-lines .line2 {
            transition: transform 0.2s ease-in-out;
        }

        .navbar-container .hamburger-lines .line3 {
            transform-origin: 0% 100%;
            transition: transform 0.4s ease-in-out;
        }
      
        .navbar .menu-items {
            padding-top: 100px;
            background: #fff;
            height: 50vh;
            /* max-width: 300px; */
            transform: translateX(-160%);
            display: flex;
            flex-direction: column;
            margin-left: -40px;
            padding-left: 50px;
            transition: transform 0.5s ease-in-out;
            box-shadow: 5px 0px 10px 0px #aaa;
        }

        .navbar .menu-items li {
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
            font-weight: 500;
        }

        .logo {
            position: absolute;
            top: 5px;
            right: 15px;
            font-size: 2rem;
        }

        .navbar-container input[type="checkbox"]:checked ~ .container-fluid .row .mobnavv .menu-items{
            transform: translateX(0%);
        }
        .navbar-container input[type="checkbox"]:checked ~ .container-fluid .row .mobnavv{
            transform: translateX(0%);
        }

        .navbar-container input[type="checkbox"]:checked ~.hamburger-lines .line1 {
            transform: rotate(35deg);
        }

        .navbar-container input[type="checkbox"]:checked~.hamburger-lines .line2 {
            transform: scaleY(0);
        }

        .navbar-container input[type="checkbox"]:checked~.hamburger-lines .line3 {
            transform: rotate(-35deg);
        }
    }    
    @media (max-width: 500px) {
        html {
            font-size: 65%;
        }

        .navbar .menu-items li {
            font-size: 1.6rem;
        }

        .testimonial-container {
            flex-direction: column;
            text-align: center;
        }

        .food-menu-container img {
            margin: auto;
        }

        .food-menu-item {
            flex-direction: column;
            text-align: center;
        }

        .form-container {
            width: 90%;
        }

        .contact-container {
            display: flex;
            flex-direction: column;
        }

        .contact-img {
            width: 90%;
            margin: 3rem auto;
        }

        .logo {
            position: absolute;
            top: 06px;
            /* right: 10rem; */
            font-size: 3rem;
        }

        .navbar .menu-items li {
            margin-bottom: 2.5rem;
            font-size: 1.8rem;
            font-weight: 500;
        }
    }

    @media (min-width: 769px) and (max-width: 1200px) {
        .img-container h3 {
            font-size: 1.5rem;
        }

        .img-container .btn {
            font-size: 0.7rem;
        }
    }

    @media (orientation: landscape) and (max-height: 500px) {
        .showcase-area {
            height: 50vmax;
        }
    }
</style>