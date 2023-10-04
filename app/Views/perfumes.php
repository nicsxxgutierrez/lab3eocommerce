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
                              <li class="nav-item">
                                 <a class="nav-link" href="/about">About</a>
                              </li>
                              <li class="nav-item active">
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
      <!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Our Perfumes</h2>
                     <p>Imagine you walk into a high-end boutique specializing in luxury fragrances. The store is elegantly designed with soft lighting, and glass shelves lined with beautifully designed perfume bottles. As you approach the counter, a knowledgeable salesperson greets you and asks if you're looking for a new fragrance. You nod, and they begin to guide you through the selection, explaining the unique characteristics of each perfume.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume1.jpg" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>2,836.07</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume2.jpg" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>2,949.52</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume3.png" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>3,403.29</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume4.jpg" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>3,119.68</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume5.jpg" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>3,346.57</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume6.jpg" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>3,062.96</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume7.jpg" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>3,289.85</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume8.jpg" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>3,176.40</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume9.png" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>3,006.24</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume10.png" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>3,233.13</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume11.jpg" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>3,460.01</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/perfume12.jpg" alt="#"/></figure>
                     <h3><span class="blu">Price: </span>3,516.73</h3>
                     <p>Perfumes</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our  Glasses section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +631234567890</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> yourperfumes@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
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