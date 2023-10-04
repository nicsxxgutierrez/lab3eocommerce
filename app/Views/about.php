<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>My Ecommerce</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?= base_url() ?>css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout position_head">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="/view"><img src="images/logolhs.jpg" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="/view">Home</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="/about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/perfumes">Our Perfumes</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/shop">Shop</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/contact">Contact Us</a>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="#">Login</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#">Register</a>
                              </li>
                              <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/perfume4.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>About Our Shop</h2>
                     <p><h1>"Luxe Haven Style: Where Scents Come to Life"</h1>
                        Welcome to Fragrance Haven, a sanctuary for all things aromatic and luxurious. 
                        Nestled in the heart of the city, our boutique perfume shop is a haven for fragrance enthusiasts and connoisseurs alike. 
                        Step into a world where scents come to life, and every bottle tells a unique olfactory story.<br><br>
                        <h4>Aromatic Aisles:</h4> As you enter our shop, you'll be greeted by rows of elegantly displayed perfume bottles, each with its own distinctive character. 
                        From timeless classics to contemporary masterpieces, our curated collection features a wide range of scents to suit every taste and occasion. 
                        Explore the shelves, and you'll find:<br>
                        Designer Fragrances, Niche Perfumes, Natural and Organic Scents and Custom Fragrance Blending.<br><br>
                        <h4>Knowledgeable Perfumers:</h4>
                        Our team of knowledgeable perfumers is passionate about helping you find the perfect scent. 
                        Whether you're searching for a signature fragrance, a gift for a loved one, or seeking advice on scent layering, our experts are here to assist you.<br><br>
                        <h4>Elevate Your Scent Game:</h4> Fragrance Haven isn't just a place to buy perfumes; it's a destination to enhance your fragrance journey. 
                        Join us for regular fragrance workshops and events, where you can learn about the art of perfumery, discover scent families, and explore the fascinating history of fragrances.<br><br>
                        <h4>Online Shopping:</h4> Can't make it to our physical store? No problem! Explore our online store, where you can browse and purchase your favorite perfumes from the comfort of your home. 
                        We offer worldwide shipping and a hassle-free shopping experience. At Fragrance Haven, we believe that a scent can evoke memories, uplift moods, and express individuality.<br><br>
                        Come visit us, and let us help you find the scent that speaks to you. Your olfactory adventure awaits!</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +63123456789</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> yourperfumes@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>