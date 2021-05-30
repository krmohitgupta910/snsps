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
<title>Datesheet - Sant Nischal Singh Public School, Ladwa</title>

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
              <h2 class="text-theme-colored2 font-36">Datesheet</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="home">Home</a></li>
                  <li><a href="#">Academics</a></li>
                <li class="active">Datesheet</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

 
     
      
       
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
                       <h2 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30 text-center"> <span class="text-theme-colored2">Datesheet</span> </h2>
              <h5 class="mt-5 mb-15  text-center">SANT NISCHAL SINGH PUBLIC SCHOOL, LADWA</h5> 
              <br>
              <br>
                    <?php
    
           include_once 'dbfiles/db.php';
            $db=new db();
          $db->connect();
        $res=mysqli_query($db->conn,"select * from datesheet order by id desc");
        
        
            while($row=mysqli_fetch_array($res))
            {  
                $value=$row[0];
                $nam=$row[1];
			   $fil="uploadfiles/datesheet/".$row[2];
		  
          ?>
              
          <div class="col-md-4  ">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">                  
                  <div class="post-thumb"> <?php
                  echo"<h4 class='text-center'>$nam </h4> "."<br>"; 
                        echo"<h6 class='text-center' > <a href='$fil' target='_blank' style='color:#1592b4;'>Download </a></h6> "; 
                 
                   ?> 
                         
                  </div>
                </div> 
              </article> 
            </div>
             
          </div>
          <?php  }
         mysqli_close($db->conn);
                 ?> 
         
     
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