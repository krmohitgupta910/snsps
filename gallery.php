<?php 
  include_once 'dbfiles/db.php';
            $db=new db();
          $db->connect();
?>
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
              <h2 class="text-theme-colored2 font-36">Gallery</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="home">Home</a></li>
              
                <li class="active">Gallery</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <!-- Gallery Grid 3 -->
    <section>
      <div class="container">
       
          <div class="row">
            <div class="col-md-3">
              <!-- Portfolio Filter -->
              <div class="portfolio-filter">
                 <!--<div class="row">-->
                

               	<?php
			 $sql = "SELECT DISTINCT category FROM  images ";
					 $result = mysqli_query($db->conn,$sql);


			 while($row = mysqli_fetch_assoc($result)){
					 $category= $row['category'];
				
				 
			   ?>
				  
			 
				    <a href="#<?php echo $category; ?>" class=" col-md-12 mediac" data-filter=".<?php echo $category; ?>"><?php  $text = $category; $final = preg_replace('#[ -]+#', '-', $text); $string = $final; $arr = explode("-",$string);
$string = implode(" ",$arr); $data = ucwords($string); echo $data ; ?></a>
				    
            
                
              
               
					  
					    <?php } ?>
					  
					  
					  
					  <a href="#" class="active col-md-12 mediac" data-filter="*">All</a>
              
              
              <!--</div> -->
              <!--remove able-->
              
              
              </div>
              <!-- End Portfolio Filter -->
            </div>
            <div class="col-md-9">
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope default-animation-effect grid-3 gutter clearfix" data-lightbox="gallery">
				  
				
				  
	 		<?php
			 $sql = "SELECT  * FROM images ";
					 $result = mysqli_query($db->conn,$sql);


			 while($row = mysqli_fetch_assoc($result)){
					 $img= $row['imagename'];
					 	 $name= $row['name'];
					 	  $date= $row['created'];
					 	    $category= $row['category'];
					$image_src = "img/gallery/".$img;
			   ?>
				   
			 
				     <!-- Start PTM-->
				  
				                <!-- Portfolio Item Start -->
			  <!--<div class="row">-->
            <!--<div class="col-md-4">-->
                <div class="gallery-item  <?php echo $category; ?>"> 
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo $image_src;  ?>" alt="<?php echo $name; ?>Sant Nischal Singh Public School, Ladwa">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center"> <?php echo $name; ?>   </div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo $image_src;  ?>" data-lightbox-gallery="gallery"  title="<?php echo $date; ?> " <i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                         
              <!--</div> -->
              <!-- End Portfolio Gallery Grid -->

            <!--</div>-->
                
                <?php } ?>
                <!-- Portfolio Item End -->
				  
			
             
            
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