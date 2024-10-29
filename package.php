<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Best Agency</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/logo.jpg"></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="gallery.php">gallery</a>
      <a href="book.php">book</a>
      <a href="chatbot.php" class="btn">Chat with Us!</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/Mukshpuri-Top.jpg" alt="">
         </div>
         <div class="content">
            <h3>Muskpuri-Top </h3>
            <p>Enjoy unforgettable fun with our top-selling Mhuskpuri Top packages!</p>
            <h2>PKR 10,000 per person</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Shangrila Resort img.jpg" alt="">
         </div>
         <div class="content">
            <h3>Shangrila Resort </h3>
            <p>Enjoy unforgettable fun with our top-selling Shangrila Resort packages!</p>
            <h2>PKR 20,000 per person</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/attabad lake.jpg" alt="">
         </div>
         <div class="content">
            <h3>Attabad Lake</h3>
            <p>Enjoy unforgettable fun with our top-selling Attabad Lake packages!</p>
            <h2>PKR 11,900 per person</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/malam jabba.jpg" alt="">
         </div>
         <div class="content">
            <h3>Malam Jabba</h3>
            <p>Enjoy unforgettable fun with our top-selling Malam Jabba packages!</p>
            <h2>PKR 13,900 per person</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Mahodand_lake.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mahodand lake, kalam</h3>
            <p>Enjoy unforgettable fun with our top-selling Mahodand Lake packages! </p>
            <h2>PKR 18,000 per person</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/neelum valley.jpg" alt="">
         </div>
         <div class="content">
            <h3>Neelum Valley</h3>
            <p>Enjoy unforgettable fun with our top-selling Neelum Valley packages! </p>
            <h2>PKR 15,900 per person</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/saif ul malook.jpg" alt="">
         </div>
         <div class="content">
            <h3>Saif-ul-Malook Lake</h3>
            <p>Enjoy unforgettable fun with our top-selling Saif-ul-malook Lake packages! </p>
            <h2>PKR 20,900 per person</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/shogran-valley.jpg" alt="">
         </div>
         <div class="content">
            <h3>Shogran Valley</h3>
            <p>Enjoy unforgettable fun with our top-selling Shogran Valley packages! </p>
            <h2>PKR 25,900 per person</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/islamabad.jpg" alt="">
         </div>
         <div class="content">
            <h3>Faisal Mosque, Islamabad</h3>
            <p>Enjoy unforgettable fun with our top-selling Islamabad packages! </p>
            <h2>PKR 14,900 per person</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
<!-- footer section starts  -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         <a href="gallery.php"> <i class="fas fa-angle-right"></i> gallery</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +92-356-9965 </a>
         <a href="#"> <i class="fas fa-phone"></i> +92-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> triptroop@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Islamabad, Pakistan - 1215  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>trip troop</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>