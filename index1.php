<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SARAH EVENT HANDLERS</title>
        <link rel="stylesheet" href="style4.css">

    <link rel="preconnect"  href="https://fonts.gstatic.com">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:ital,wght@0,100;0 ,200;0,300;0,400;0,500; 0,600; 0,700; 1,100; 1, 200; 1,300; 1,400;1,500; 1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </head>
<body>
<header>
  <div class="ex">
    <img src="logo2.jpg" class="new" style="border-radius:40%;" height="10%" width="10%"></div>
    <div id="menu-bar" class="fas fa-bars"></div>
    <nav class="navbar" >

        <a href="#home">HOME</a> 
        <a href="#clients">CLIENTS</a>        
        <a href="#contact">CONTACT</a>
           
    </nav>
</header>
<section class="home" id="home">
    <div class="content"><br><br><br>
      <span>S<span style="color:red;">AR</span>AH WEDDING PLANNERS</span><br><br><br><br><br><br><br><br><h3>WE MAKE EVERY MOMENT HAPPY</h3>
      <a href="a"class="btn">LEARN MORE</a>
    </div>
  </section>
  <!-- Slideshow container -->
<div class="slideshow-container" style="background:rgb(12, 231, 220);">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="ss4.jpg" style="width:100%">
  <div class="text" style="color:red;">Heaven's path</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="ss2.jpg" style="width:100%">
  <div class="text" style="color:red;">slow and steady </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="ss3.jpg" style="width:100%">
  <div class="text" style="color:red;">fast paced life</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


 <section class="clients" id="clients">
    <h1>OUR PREVIOUS CLIENTS</h1><hr>
    <div class="client"><div class="ex">
      <img src="cop1.jpg" style="height:40%; width:40%; border-radius:20px;">
      <img src="cop5.jpg" style="height:40%; width:40%; border-radius:20px;"><br><br>
      <img src="cop10.jpg" style="height:40%; width:40%; border-radius:20px;">
      <img src="couple4.jfif" style="height:40%; width:40%; border-radius:20px;"></div>
      
      
    </div><hr>
  </section>

  <section class="contact" id="contact">
    <h1>PLACE YOUR ORDER</h1>
    <?php 
    include("connection.php");
    include("function.php");
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
       $phoneno= $_POST['phoneno'];
        $fdate=$_POST['fdate'];
        $email=$_POST['email'];
        $desc=$_POST['des'];
        $location=$_POST['loct'];
        if(!empty($phoneno) && !empty($fdate)&& is_numeric($phoneno)  && !empty($email) && !empty($location))
        {
            
            $query="insert into booking (phoneno,location,mailid,description,fdate) values('$phoneno','$location','$email','$desc','$fdate')";
            mysqli_query($con ,$query);echo '<script>alert("your booking was successful")</script>';
           // header("location:login.php");
           // die;
    
    
        }  
        else{
            echo "<script>alert('please enter some valid information')</script>";
        }
    }
    ?>
    
    <form method="post" >

       
<div class="text">
  <input type="text" placeholder="Name" ><br>
  <input type="text" placeholder="Venue" name="loct"><br>
  <input type="text" placeholder="E-mail ID" name="email"><br>
  <div class="code"><textarea placeholder="CODE OF SERVICE NEEDED. i.e:C001" rows="10" cols="50" name="des" ></textarea></div>
</div>
  <div class="txt" >

  <center><input type="text" placeholder="ENTER YOUR  WHATSAPP NO" name="phoneno"><br>
  <input type="date" placeholder="ENTER function date" name="fdate"><br>
  <textarea placeholder="ENTER YOUR TEMPERORY ADDRESS" rows="4" cols="65"></textarea><br><br><br><br><br>
  
</div>
<center><div class="xp"><button >BOOK</button></div></form>></center>
  </section>
    </body>
</html>