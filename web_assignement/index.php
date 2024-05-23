<?php
session_start();//start sesssion to access session variables
// ckeck if the user is logged in
if (!isset($_SESSION['user_id'])){
    header("location: login.php");  //redirect to the login page
    exit();  //stop further excution of the script
} 
//proceed with the rest of your script
//....

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethical Jewelry</title>
    <link rel="stylesheet" href="c.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="style.html">style</a></li>
            <li><a href="self.html">self</a></li>
            <li><a href="culture.html">culture</a></li>
            <li><a href="about.html">about</a></li>
            <li><a href="newsletter.html"> newsletter</a></li>
            <li><a href="login.php"> login</a></li>
            <li><a href="user.php"> user account</a></li>
        </ul>
    </nav>
</body>
</html>

    <header>
        <h1>Ethical Jewelry</h1>
            </ul>
        </nav>
    </nav>
 <br>
 <h>home page description</h>
 
<div class="t">
    <div class="re"> 
      <img src="p1.jpeg" >
      <img src="p2.jpeg" >
      <img src="p3.jpeg" >
      <img src="p4.jpeg" >
      
       </div>
       <div class="we"> 
           <p>Discover Millions of Beautiful and Authentic Stock Photos from 123RF.<br>
                Start Exploring. Unleash Your Creativity <br>Without Budget and Content Limit.
                 Start Now.</p>
            </div>
           </div>
           <div class="te">
               <div class="ye"> 
                 <img src="p7.jpeg" >
                 <img src="p9.jpeg" >
                 <img src="p10.jpeg" >
                 <img src="p6.jpeg" >
                 
                  </div>
               </div>
 <img src="attract pictures.jpg">
    </header>
    <section id="hero">
        <h2>Handcrafted Ethical Jewelry</h2>
        <p>Explore our collection of ethically sourced and beautifully handcrafted jewelry pieces.</p>
        <a href="#products" class="button">View Products</a>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>Learn about our commitment to ethical practices and sustainability in jewelry making.</p>
        <a href="#about" class="button">Read More</a>
    </section>

    <section id="products">
        <h2>Our Products</h2>
        <p>Discover our stunning collection of ethically made jewelry, crafted with care and passion.</p>
        <a href="#products" class="button">Shop Now</a>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Have a question or want to get in touch? Reach out to us!</p>
        <a href="#contact" class="button">Contact</a>
    </section>

    <footer class="inside_pages">
        <div class="universal_container">
            <div class="copyright">Copyright © 2022 All Rights Reserved</div>
            <div class="socialmedia">
                <ul class="">
                    <li><a href="https://www.facebook.com/Tiffany/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/TiffanyAndCo/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/tiffanyandco/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
<h>INFORMATION PAGE OF OUR COMPANY</h>
<div class="syli">
<div class="box1">
<li><a href="home.html">Home</a></li>
            <li><a href="style.html">style</a></li>
            <li><a href="self.html">self</a></li>
            <li><a href="culture.html">culture</a></li>
            <li><a href="about.html">about</a></li>
            <li><a href="newsletter.html"> newsletter</a></li>

</div>

<div class="box2">
<a href="https://www.facebook.com/How2Recycle"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/how2recycle_/"><i class="fa-brands fa-instagram"></i></a>  
            <script src="https://kit.fontawesome.com/c618e882ef.js" crossorigin="anonymous"></script>  

</div>
</div>


</body>
</html>