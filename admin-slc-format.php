<?php 
session_start();
if(!isset($_SESSION['un']))
{
header("location:admin-login");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
 <head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="sant nischal singh public school, ladwa" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop,Sant Nischal Singh Public School, Ladwa - Sant Nischal Singh Public School, Ladwa, snsps,snspsynr,snspsladwa,sant nischal singh,sant nischal singh public school,sant nischal singh public school ladwa,ladwa" />
 

<!-- Page Title -->
<title>Admin Panel -SLC Format - Sant Nischal Singh Public School, Ladwa</title>

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
 include_once "header_admin.php";
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
              <h2 class="text-theme-colored2 font-36">Manage SLC Format</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
           
                <li class="active">SLC Format</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    
    
     <section>
      <div class="container pt-20 pb-20">
        <h2 class="heading-border text-center">Manage SLC Format</h2>
        <div class="esc-heading lr-line left-heading pb-20">
          <!--<h4 class="text-center">All Classes I - X</h4>-->
        </div>
        <p class="text-center">  <code>Upload </code>and <code>Delete</code>SLC Format...</p>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <ul id="myTab" class="nav nav-tabs boot-tabs">
                <li class="active"><a href="#upload" data-toggle="tab">Upload File</a></li>
                <li><a href="#delete" data-toggle="tab">Delete File</a></li>
               
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="upload">
                 
                  <section class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
            <div class="border-1px p-30 mb-0">
              <h3 class="text-theme-colored mt-0 pt-5">Upload  Now</h3>
              <hr>
              <!--<p>Manage  Your Database</p>-->
              <form   action="dbfiles/dbadmin-slc.php" method="post" enctype="multipart/form-data">
               <!--<div class="row">-->
               <!--   <div class="col-sm-6">-->
               <!--      <div class="form-group">-->
               <!--   <label>   From  </label>-->
               <!--   <input name="from" class="file" type="number" placeholder="  year" >-->
                   
               <!-- </div>-->
               <!--   </div>-->
               <!--   <div class="col-sm-6">-->
               <!--     <div class="form-group">-->
               <!--   <label> To </label>-->
               <!--   <input name="to" class="file" type="number" placeholder="   year" >-->
            
               <!-- </div>-->
               <!--   </div>-->
               <!-- </div>-->
               
                  <div class="row">
                  <div class="col-sm-12">
                     <div class="form-group">
                  <label> Upload File </label>
                  <input name="slcformat" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                  <small>Maximum upload file size: less than (<) 5MB </small> 
                </div>
                  </div>
                 
                </div>
               
               <center><a href="https://compressimage.toolur.com/" target="_blank">click to resize and compress image</a></center>
                <div class="form-group">
                  
                  <button type="submit" name="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">click here to Upload</button>
                </div>
              </form>
               
          
            </div>
          </div>
        </div>
      </div>
    </section> 
                 
                </div>
                <div class="tab-pane fade" id="delete">
                
                
                
                
                
                    <section class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <div class="border-1px p-30 mb-0">
              <h3 class="text-theme-colored mt-0 pt-5">Delete  Now</h3>
              <hr>
              <!--<p>Manage  Your Database</p>-->
             
              
                <div class="row">   
                
                           <?php
    
           include_once 'dbfiles/db.php';
            $db=new db();
          $db->connect();
        $res=mysqli_query($db->conn,"select * from slcformat");
         
            while($row=mysqli_fetch_array($res))
            {
                $idd=$row[0];
                $nam=" SLC Format ".$row[2];
              $fil="uploadfiles/tc/".$row[1];
                echo"<div class='col-sm-2 col-md-4'>";
                        echo"<h5 class='text-center'>$nam </h5> ";   
                        echo" <a href='dbfiles/dbdelete-records-slc.php?id=$idd' type='submit' name='submit' class='btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10' data-loading-text='Please wait...'> Delete</a>";
                  echo"</div>";
                     
           }
         mysqli_close($db->conn);
                 ?> 
      
                      
                    
                
                 
                </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
                 
                 </div>
                
               
              </div>
            </div>
          
          </div>
   
        </div>
      </div>
    </section>
    
    
   
  </div>
  <!-- end main-content -->

 
</div>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
 </html>
 
 
  