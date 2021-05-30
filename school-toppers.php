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
<title>School Toppers - Sant Nischal Singh Public School, Ladwa</title>

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
 <script>
          function check(datavalue){
           
         
              $.ajax({
                  url: 'dbfiles/fetch-school-topper-img-modal',
                  method:'POST',  
                  data:{
                      datapost : datavalue }, 
                    dataType:"JSON",
                  success: function(da){
                      data=da;
                  
                      $("#image").html('<img src="' + data.img + '"class="img-responsive" style="height:100%;width:100%;"/>');
                   
                         }
              });
               
            }
 </script>
 
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
              <h2 class="text-theme-colored2 font-36">School Toppers </h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="home">Home</a></li>
                 <li><a href="#">Academics</a></li>
                <li class="active">School Toppers </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

 
     
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
                       <h2 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30 text-center">School <span class="text-theme-colored2">Toppers </span> </h2>
              <h4 class="mt-5 mb-15  text-center">SANT NISCHAL SINGH PUBLIC SCHOOL, LADWA</h4>
                    <?php
    
           include_once 'dbfiles/db.php';
            $db=new db();
          $db->connect();
        $res=mysqli_query($db->conn,"select * from toppers order by id desc");
        
        
            while($row=mysqli_fetch_array($res))
            {  
                $value=$row[0];
			   $img="uploadfiles/toppers/".$row[1];
		  
          ?>
              
          <div class="col-md-4  ">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">                  
                  <div class="post-thumb"> <?php
                 echo"<a  href='javascript:;' onclick='check($value);' data-toggle='modal' data-target='#myModal'> <img  src='$img' class='img-fullwidth ' style='height:500px;' alt=''></a>";
                 
                   ?> 
                    <!--<div class="post-date"><span>26 </span><br> Oct</div>                    -->
                           
                  </div>
                </div> 
              </article> 
            </div>
             
          </div>
          <?php  }
         mysqli_close($db->conn);
                 ?> 
         
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button"  class="close btn btn-seconday" data-dismiss="modal" href='javascript:;' onclick=" $('#image').html('<center><img src=css/load.gif style=width:100px;height:100px; class=img-responsive /></center>');"><span style="font-size:30px;color:blue;">&times;</span></a>
                                
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--  <span aria-hidden="true">&times;</span>-->
        <!--</button>-->
      </div>
      <div class="modal-body">
	          <div id="image">
                 <center><img src="css/load.gif" style="width:100px;height:100px;" class="img-responsive" alt=""/> </center>
              </div>
                                <!--<img src="<?php echo $img ?>" style="height:100%;width:100%;" class="img-responsive" alt="" />-->
	 
	 </div>
      <div class="modal-footer">
     
        <a type="button"  class="close btn btn-primary " data-dismiss="modal" href='javascript:;' onclick=" $('#image').html('<center><img src=css/load.gif style=width:100px;height:100px; class=img-responsive /></center>');"><h4 style="color:blue;">Close</h4></a>
       
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