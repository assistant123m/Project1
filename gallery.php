<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Video Gallery</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="images/logo.jpg" alt="Logo"></a>
   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="gallery.php" class="active">gallery</a>
      <a href="book.php">book</a>
      <a href="chatbot.php" class="btn">Chat with Us!</a>
     
   </nav>
</section>
<!-- header section ends -->

<div class="heading" style="background:url(images/gallery-header.jpg) no-repeat;">
   <h1>Video Gallery</h1>
</div>

<!-- gallery section starts  -->
<section class="gallery">
   <div class="container">
      <h1 class="heading-title text-center">Our Video Gallery</h1>
      <div class="row">

         <!-- Video 1 -->
         <div class="col-md-4 mb-4">
            <div class="video-wrapper">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/AZmxSSRrElk?si=qm8Io8X1x1mCkspC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
               <h3 class="text-center">Muskpuri Top</h3> <!-- Place name -->
            </div>
         </div>

         <!-- Video 2 -->
         <div class="col-md-4 mb-4">
            <div class="video-wrapper">
            <iframe width="100%" height="200"src="https://www.youtube.com/embed/i_oAquf-Ahs?si=Ya031kc6o0Nij5Ee" frameborder="0" allowfullscreen></iframe>
               <h3 class="text-center">Shangrila Resort</h3> <!-- Place name -->
            </div>
         </div>

         <!-- Video 3 -->
         <div class="col-md-4 mb-4">
            <div class="video-wrapper">
               <iframe width="100%" height="200" src="https://www.youtube.com/embed/t-SmS2MrADw?si=VcwpRcN69HlFv6lQ" frameborder="0" allowfullscreen></iframe>
               <h3 class="text-center">Attabad Lake</h3> <!-- Place name -->
            </div>
         </div>

         <!-- Video 4 -->
         <div class="col-md-4 mb-4">
            <div class="video-wrapper">
            <iframe width="100%" height="200"src="https://www.youtube.com/embed/GcjuKgmqyE4?si=-iqNZI4bE2DEdx8X" frameborder="0" allowfullscreen></iframe>
               <h3 class="text-center">Malam Jabba</h3> <!-- Place name -->
            </div>
         </div>

         <!-- Video 5 -->
         <div class="col-md-4 mb-4">
            <div class="video-wrapper">
               <iframe width="100%" height="200"src="https://www.youtube.com/embed/1b0mCUefXLU?si=S_BdWK0vu-RWa4Py" frameborder="0" allowfullscreen></iframe>
               <h3 class="text-center">Mahodand Lake</h3> <!-- Place name -->
            </div>
         </div>

         <!-- Video 6 -->
         <div class="col-md-4 mb-4">
            <div class="video-wrapper">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/yNfplIC4XWQ?si=lMUSbiDgz8Y6IpCT" frameborder="0" allowfullscreen></iframe>
               <h3 class="text-center">Neelum Valley</h3> <!-- Place name -->
            </div>
         </div>

          <!-- Video 7 -->
          <div class="col-md-4 mb-4">
            <div class="video-wrapper">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/bWRFzYeiAjw?si=44tElKLUjZaO8DFp"frameborder="0" allowfullscreen></iframe>
               <h3 class="text-center">Faisal Mosque, Islamabad</h3> <!-- Place name -->
            </div>
         </div>

         <!-- Video 8 -->
         <div class="col-md-4 mb-4">
            <div class="video-wrapper">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/CZRdC3VaBg0?si=4olwsQyHlMsUnpvS" frameborder="0" allowfullscreen></iframe>
               <h3 class="text-center">Saif-ul-Malook Lake</h3> <!-- Place name -->
            </div>
         </div>

          <!-- Video 9 -->
          <div class="col-md-4 mb-4">
            <div class="video-wrapper">
            <iframe width="100%" height="200" src="https://www.youtube.com/embed/7LbE1XT-3iE?si=2Rft3idM3c6iihUM" frameborder="0" allowfullscreen></iframe>
               <h3 class="text-center">Shogran</h3> <!-- Place name -->
            </div>
         </div>

   </div>
</section>
<!-- gallery section ends -->

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
      <div class="credit"> designed by <span>trip troop</span> | all rights reserved! </div>
   </div>
</section>
<!-- footer section ends -->
</body>
</html>
