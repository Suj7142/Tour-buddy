<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

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

   <a href="home.php" class="logo"><img src="images/logo.png" alt="" style="height: 40px; width:200px;"></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="index1.php">login</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-3-bg.jpg) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <!-- <input type="" placeholder="place you want to visit" name="location"> -->
            <select name="location" class="select" style="width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border:var(--border);
            border-radius: 4px;
            box-sizing: border-box;" >
               <option value="Select City">Select City</option>
               <option value="Tajmahal(agra)">Tajmahal(agra)</option>
               <option value="Red-Fort(agra)">Red-Fort(agra)</option>
               <option value="Janter-Manter(Jaipur)">Janter-Manter(Jaipur)</option>
               <option value="Jalmahal(jaipur)">Jalmahal(jaipur)</option>
               <option value="City-Palace(udaipur)">City-Palace(udaipur)</option>
               <option value="Lake pichola(udaipur)">Lake pichola(udaipur)</option>
               <option value="Leh(Manali)">Leh(Manali)</option>
               <option value="Magnetic-hill(Manali)">Magnetic-hill(Manali)</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Source :</span>
            <select name="s_location"" class="select" style="width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border:var(--border);
            border-radius: 4px; 
            box-sizing: border-box;" >
               <option value="Bhopal">Bhopal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Medium to travel :</span>
            <select name="Medium" class="select" style="width: 100%;
            padding: 16px 20px;
            margin: 8px 0;
            display: inline-block;
            border:var(--border);
            
            box-sizing: border-box;" >
               <option value="BUS">BUS</option>
            </select>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















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
         <a href="#"> <i class="fas fa-envelope"></i> Tourbuddy@gmail.com </a>
         
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