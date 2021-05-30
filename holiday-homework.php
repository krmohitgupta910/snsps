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
<title>Sant Nischal Singh Public School, Ladwa</title>

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
              <h2 class="text-theme-colored2 font-36">Holiday’s Homework</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="home">Home</a></li>
              
                <li class="active">Holiday’s Homework</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
    
    <!-- Section: blog -->
    <section id="blog">
      <div class="container pb-sm-40">
        <div class="section-title mb-40">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-uppercase mb-5 text-center">Holiday’s  <span class="text-theme-colored2">Homework</span></h2>
              <h5 class="font-16 text-gray-darkgray mt-5 text-center">SANT NISCHAL SINGH PUBLIC SCHOOL, LADWA</h5>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
         
              
              
                      
                    <?php
    
           include_once 'dbfiles/db.php';
            $db=new db();
          $db->connect();
        $res=mysqli_query($db->conn,"select * from holidaywork order by id ASC");
        
        
            while($row=mysqli_fetch_array($res))
            {
                  
			   $class=$row[1]; 
			   $thumb="uploadfiles/thumb/".$row[2];
			   
			   $pdff="uploadfiles/pdf/".$row[3];
			   $pdf=$row[3];
          ?>
              
            <div class="col-sm-6 col-md-4">
              <article class="post mb-sm-30">
                <div class="post-thumb">
                    <?php
                 echo" <img src='$thumb' class='img-fullwidth' alt=''>";
                   ?>
                  <!--<div class="post-date"><span>26 </span><br> Oct</div>-->
                  <div class="post-top-meta">
                    
                  </div>
                </div>
                <div class="post-description border-1px p-20">
                   <a href="#"><h3 class="post-title font-weight-600 mt-0 mb-15 text-center"> Class <?php echo"$class";   ?></h3></a>
                  <!--<p> homework</p>-->
                </div>                
                <div class="post-meta" >
                  <!--<ul class="list-inline pull-left flip">-->
                  <!--  <li><i class=" text-theme-colored2 font-20"></i><a  style="color:#72bdd2;" target="_blank" href="view-pdf/view-pdf-holiday-homework?pdf=<?php echo $pdf?>"><i class="fa fa-search-plus"></i>View</a> </li>-->
                   
                  <!--</ul>-->
                  <center><a href="<?php echo"$pdff";   ?>"   class="text-theme-colored2 font-14 text-gray-darkgray  flip">Download</a></center>
                </div>
              </article>
            </div>
         
          <?php  }
         mysqli_close($db->conn);
                 ?> 
         
           
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
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
 </html>
























 