<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"> <img src="images/logo.png" alt="" style="height: 40px; width:200px;"> </a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="login/index1.php">login</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/slide-1.jpg) no-repeat">
            <div class="content">
               <span>work, travel, save, repeat</span>
               <h3>Have stories to tell not stuff to show</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/jalmahal-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/janter-manter-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="Tajmahal">
         </div>
         <div class="content">
            <h3>Tajmahal(Agra)</h3>
            <p>A landmark monument and a UNESCO World Heritage Site, the Taj Mahal is one of the most admired Mughal masterpieces in the world and is nothing short of poetry crafted in marble.</p>
            <div style="font-size: 20px;cursor:pointer;">
               <span>₹2000 </span>
            </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/janter-manter.jpg" alt="janter-manter">
         </div>
         <div class="content">
            <h3>Jantar-Mantar(Jaipur)</h3>
            <p>The Jantar Mantar, Jaipur is a collection of 19 astronomical instruments built by the Rajput king Sawai Jai Singh II, the founder of Jaipur, Rajasthan.</p>
            <div style="font-size: 20px;cursor:pointer;">
               <span>₹8000 </span>
            </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/jal-mahal.jpg" alt="jalmahal" >
         </div>
         <div class="content">
            <h3>JalMahal(Udaipur)</h3>
            <p>The Jal Mahal palace is an architectural showcase of the Rajput style of architecture (common in Rajasthan) on a grand scale. <br> <br></p>
            <div style="font-size: 20px; cursor:pointer">
               <span>₹2000 </span>
            </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->



<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-pic.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Our TOUR BUDDY is a website that provides travel reviews, trip fares, or a combination of both. It gives brief about the famous Tourist places of INDIA.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->
















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

 
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> 9145871563 </a>
         <a href="#"> <i class="fas fa-phone"></i> 7999074344 </a>
         <a href="#"> <i class="fas fa-phone"></i> 7247251454 </a>
         <a href="#"> <i class="fas fa-envelope"></i>tourbuddy@gmail.com</a>
         
      </div>

      
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/IWILLDO60195411" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/shubham_garg.12/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/in/sujeet-gupta-27bb84223/" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>saransh|shubham|sujeet</span>  </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>