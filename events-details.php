<!DOCTYPE html>
<html dir="ltr" lang="en">
 <head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="sant nischal singh public school, ladwa" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop,Sant Nischal Singh Public School, Ladwa - Sant Nischal Singh Public School, Ladwa, snsps,snspsynr,snspsladwa,sant nischal singh,sant nischal singh public school,sant nischal singh public school ladwa,ladwa" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Event Details - Sant Nischal Singh Public School, Ladwa</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set3.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  >

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

 
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
   <?php
 include_once "header.php";
 ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Events Details</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="home">Home</a></li>
                <li><a href="#">Academics</a></li>
                  <li><a href="events">Events</a></li>
                <li class="active">Events Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
<style>
    .font-size-text-admssion{
        font-size:19px;
    }
</style>
    <!-- Section About -->
    <?php 
    $val= $_GET['eventid'];
        include_once 'dbfiles/db.php';
            $db=new db();
          $db->connect();
          $res=mysqli_query($db->conn," SELECT * FROM cretevent where id=$val");
       
            while($row=mysqli_fetch_array($res))
            {
                  $evtid=$row[0];
                $evt=$row[1];
          ?>
    
    <section>
        
        
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>
                <h5>Event Name:</h5>
                <p><?php echo $row[1] ?></p>
              </li>
           
              <li>
               <h5>Location:</h5>
                 <li> <i class="fa fa-map-marker text-theme-colored2"></i> <?php echo $row[2] ?></li>
              </li>
              <li>
                <h5>Start Date:</h5>
                <p><?php echo $row[3] ?></p>
              </li>
              <li>
                <h5>End Date:</h5>
                <p><?php echo $row[5] ?></p>
              </li>
                <?php $a=$row[4];
              $aa=$row[6];
              $b= strtotime($a);
              $bb= strtotime($aa);
              ?>
              
              
              
              
              <li>
                <h5>Start Time:</h5>
               <li><i class="fa fa-clock-o text-theme-colored2"></i> <?php echo date('h:i A',$b); ?></li>
              </li>
              <li>
                <h5>End Time:</h5>
                <li> <i class="fa fa-clock-o text-theme-colored2"></i> <?php echo date('h:i A',$bb); ?></li>
              </li>
              <li>
                <h5>Website:</h5>
                <p>industrialtool.in</p>
              </li>
              <li>
                <h5>Share:</h5>
                <div class="styled-icons icon-sm icon-gray icon-circled">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-8">
            <img src="<?php echo $row[8] ?>" alt="">
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-md-6">
            <h4 class="mt-0">Event Description</h4>
            <p class="text-justify"><?php echo $row[7] ?></p>
          </div>
          <div class="col-md-6">
            <blockquote>
              <p>A diverse and stimulating outdoor area surrounds the building</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
        
         <?php }
             mysqli_close($db->conn);  ?>
        
        
        <div class="row mt-40">
          <div class="col-md-12">
            <!--<h4 class="mb-20">Keynote Speakers</h4>-->
            <div class="owl-carousel-6col" data-nav="true">
              <div class="item">
                <div class="attorney">
                  <div class="thumb"><img src="images/team/1.jpg" alt=""></div>
                  <!--<div class="content text-center">-->
                  <!--  <h5 class="author mb-0"><a class="text-theme-colored" href="#">Alex Jacobson</a></h5>-->
                  <!--  <h6 class="title text-gray font-12 mt-0 mb-0">Lawyer</h6>-->
                  <!--</div>-->
                </div>
              </div>
              <div class="item">
                <div class="attorney">
                  <div class="thumb"><img src="images/team/2.jpg" alt=""></div>
                  <!--<div class="content text-center">-->
                  <!--  <h5 class="author mb-0"><a class="text-theme-colored" href="#">Alex Jacobson</a></h5>-->
                  <!--  <h6 class="title text-gray font-12 mt-0 mb-0">Businessman</h6>-->
                  <!--</div>-->
                </div>
              </div>
              <div class="item">
                <div class="attorney">
                  <div class="thumb"><img src="images/team/3.jpg" alt=""></div>
                  <!--<div class="content text-center">-->
                  <!--  <h5 class="author mb-0"><a class="text-theme-colored" href="#">Alex Jacobson</a></h5>-->
                  <!--  <h6 class="title text-gray font-12 mt-0 mb-0">Student</h6>-->
                  <!--</div>-->
                </div>
              </div>
              <div class="item">
                <div class="attorney">
                  <div class="thumb"><img src="images/team/4.jpg" alt=""></div>
                  <!--<div class="content text-center">-->
                  <!--  <h5 class="author mb-0"><a class="text-theme-colored" href="#">Alex Jacobson</a></h5>-->
                  <!--  <h6 class="title text-gray font-12 mt-0 mb-0">Lawyer</h6>-->
                  <!--</div>-->
                </div>
              </div>
              <div class="item">
                <div class="attorney">
                  <div class="thumb"><img src="images/team/5.jpg" alt=""></div>
                  <!--<div class="content text-center">-->
                  <!--  <h5 class="author mb-0"><a class="text-theme-colored" href="#">Alex Jacobson</a></h5>-->
                  <!--  <h6 class="title text-gray font-12 mt-0 mb-0">Businessman</h6>-->
                  <!--</div>-->
                </div>
              </div>
              <div class="item">
                <div class="attorney">
                  <div class="thumb"><img src="images/team/6.jpg" alt=""></div>
                  <!--<div class="content text-center">-->
                  <!--  <h5 class="author mb-0"><a class="text-theme-colored" href="#">Alex Jacobson</a></h5>-->
                  <!--  <h6 class="title text-gray font-12 mt-0 mb-0">Student</h6>-->
                  <!--</div>-->
                </div>
              </div>
              <div class="item">
                <div class="attorney">
                  <div class="thumb"><img src="images/team/7.jpg" alt=""></div>
                  <!--<div class="content text-center">-->
                  <!--  <h5 class="author mb-0"><a class="text-theme-colored" href="#">Alex Jacobson</a></h5>-->
                  <!--  <h6 class="title text-gray font-12 mt-0 mb-0">Student</h6>-->
                  <!--</div>-->
                </div>
              </div>
                         <div class="item">
                <div class="attorney">
                  <div class="thumb"><img src="images/team/8.jpg" alt=""></div>
                  <!--<div class="content text-center">-->
                  <!--  <h5 class="author mb-0"><a class="text-theme-colored" href="#">Alex Jacobson</a></h5>-->
                  <!--  <h6 class="title text-gray font-12 mt-0 mb-0">Student</h6>-->
                  <!--</div>-->
                </div>
              </div>
 
              
              <div class="item">
                <div class="attorney">
                  <div class="thumb"><img src="images/team/9.jpg" alt=""></div>
                  <!--<div class="content text-center">-->
                  <!--  <h5 class="author mb-0"><a class="text-theme-colored" href="#">Alex Jacobson</a></h5>-->
                  <!--  <h6 class="title text-gray font-12 mt-0 mb-0">Lawyer</h6>-->
                  <!--</div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
 <?php
 include_once "footer.php";
 ?>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
 </html>