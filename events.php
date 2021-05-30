<!DOCTYPE html>
<html dir="ltr" lang="en">
 <head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="sant nischal singh public school, ladwa" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop,Sant Nischal Singh Public School, Ladwa - Sant Nischal Singh Public School, Ladwa, snsps,snspsynr,snspsladwa,sant nischal singh,sant nischal singh public school,sant nischal singh public school ladwa,ladwa" />
<meta name="author" content=" " />

<!-- Page Title -->
<title>Events - Sant Nischal Singh Public School, Ladwa</title>

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
              <h2 class="text-theme-colored2 font-36">Events</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="home">Home</a></li>
                 <li><a href="#">Academics</a></li>
                  <li><a href="#">Events</a></li>
                
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
    <!-- Section: event calendar -->
    
    
     <section>
      <div class="container pt-70 pb-0">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mb-50">
                  <?php 
         include_once 'dbfiles/db.php';
            $db=new db();
          $db->connect();
          $res=mysqli_query($db->conn," SELECT * FROM cretevent  where status = 1 ");
       
            while($row=mysqli_fetch_array($res))
            {
                  $evtid=$row[0]; 
                $evt=$row[1];
          ?>
          
          
          
                
              <div class="event-list maxwidth500 clearfix mb-30">
                <div class="col-md-5">
                  <div class="thumb">
                         <?php   $da=$row[3];  $dat= strtotime($da);  ?>
                    <img src="<?php echo $row[8] ?>" alt="" class="img-fullwidth">
                    <div class="entry-date media-left text-center flip bg-theme-colored2 pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom"><?php   echo date("d",$dat);  ?></li>
                        <li class="font-12 text-white text-uppercase"><?php   echo date("M",$dat);  ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="event-list-details border-1px bg-white clearfix p-20 pt-10 pb-30">
                    <h4 class="text-uppercase font-weight-600 mb10"><a href="events-details?eventid=<?=$evtid;?>&& eventname=<?=$evt;?>"><?php echo $row[1] ?></a></h4>
                
                      <?php $a=$row[4];
              $aa=$row[6];
              $b= strtotime($a);
              $bb= strtotime($aa);
              ?>
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o text-theme-colored2"></i> <?php echo date('h:i A',$b);          echo ' - ';    echo date('h:i A',$bb); ?></li>
                      <li> <i class="fa fa-map-marker text-theme-colored2"></i> <?php echo $row[2] ?></li>
                    </ul>
                           <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                     
                      <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> <?php   echo date("d",$dat);  ?></li>
                       <li class="p-15 mr-5 bg-lightest"><?php   echo date("M",$dat);  ?></li>
                      <li class="p-15 bg-lightest"><?php   echo date("Y",$dat);  ?></li>
                    </ul>
                    <p class="mt-15 text-justify"><?php echo substr($row[7],0,100); ?> ...</p>   
                    <a href="events-details?eventid=<?=$evtid;?>&& eventname=<?=$evt;?>" class="btn btn-default mt-5">See More Detail </a>
                  </div>
                </div>
              </div>
                <?php }
             mysqli_close($db->conn);
             ?>
           
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