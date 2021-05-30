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
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Admin Panel - School Information - Sant Nischal Singh Public School, Ladwa</title>

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
              <h2 class="text-theme-colored2 font-36">Manage School Information</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
            
                <li class="active">School Information</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

   
 <!----------------------------------------------------------------------------------------------->
 <style>.tr-heading{ 
    font-size: 15px;
    font-weight: 700;
    font-family: 'Open Sans', sans-serif;
 }
 </style>
 
    
    
    
  <section>
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 mt-40">
            <hr>
            <h3 class="title text-center"> Manage  Section Wise Enrolment Of School For The Current Session Database</h3>
              <div data-example-id="simple-responsive-table" class="bs-example"> 
                  
                  <div class="table-responsive">
                      <table class="table table-bordered table-hover"> 
                      
                      <tr style="background-color:#1592b4;color:white;" > <th rowspan="2"  class="text-center">Class</th> <th colspan="6"  class="text-center">Section</th>  </tr> 
                         
                                 <tr  style="background-color:#1592b4;color:white;">    <td class="tr-heading">Rose </td> <td class="tr-heading">Lotus </td>  <td class="tr-heading">Lily</td>  <td class="tr-heading"> -</td> <td class="tr-heading"> -</td> <td class="tr-heading"> Action</td>     </tr>
                                                                  <?php 
                                          include_once 'dbfiles/db.php';
                                          $db=new db();
                                          $db->connect();
                                            $res=mysqli_query($db->conn,"SELECT * FROM `school_strength` WHERE id  BETWEEN 1 and 3");
                                             while($row=mysqli_fetch_array($res))
                                             {
                
                                                echo"  <form action='dbfiles/dbadmin-section-and-strength' method='post'> 
                                                <tr>
                                                <th scope='row'> $row[1]  </th>
                                                <td><input type='text' name='col1' value='$row[2]'>  </td> 
                                                <td><input type='text'  name='col2' value='$row[3]'> </td>   
                                                <td> <input type='text'  name='col3' value='$row[4]'>
                                                <input type='hidden'  name='idd' value='$row[0]'> </td>    
                                                <td>  <input type='text'  name='col4' value='$row[5]'></td>
                                                <td>  <input type='text'  name='col5' value='$row[6]'></td>
                                                <td> <input  type='submit' name='submit' class='btn  btn-block bg-primary' value='Update'> </td>
                                                </tr></form>";
          
                                                 }
                                                     mysqli_close($db->conn);
                                                    ?> 
                               
                                
                                  
                                  
                                  
                      
                          <tr style="background-color:#1592b4;color:white;" > <th rowspan="2"  class="text-center">Class</th> <th colspan="6"  class="text-center">Section</th>  </tr> 
                         
                                <tr  style="background-color:#1592b4;color:white;">  <td class="tr-heading">A </td> <td class="tr-heading">B </td>     <td class="tr-heading">C </td>  <td class="tr-heading">D </td>  <td class="tr-heading">E </td>  <td class="tr-heading"> Action</td>    </tr>
                                                           <?php 
                                          include_once 'dbfiles/db.php';
                                          $db=new db();
                                          $db->connect();
                                            $res=mysqli_query($db->conn,"SELECT * FROM `school_strength` WHERE id  BETWEEN 4 and 13");
                                              while($row=mysqli_fetch_array($res))
                                             {
                
                                                echo"  <form action='dbfiles/dbadmin-section-and-strength' method='post'> 
                                                <tr>
                                                <th scope='row'> $row[1]  </th> <td><input type='text' name='col1' value='$row[2]'>  </td> 
                                                <td><input type='text'  name='col2' value='$row[3]'> </td>   
                                                <td> <input type='text'  name='col3' value='$row[4]'>
                                                <input type='hidden'  name='idd' value='$row[0]'> </td>    
                                                <td>  <input type='text'  name='col4' value='$row[5]'></td>
                                                <td>  <input type='text'  name='col5' value='$row[6]'></td>
                                                <td> <input  type='submit' name='submit' class='btn  btn-block bg-primary' value='Update'> </td>
                                                </tr></form>";
          
                                                 }
                                                     mysqli_close($db->conn);
                                                    ?> 
                                <tr style="background-color:#1592b4;color:white;" > <th rowspan="2"  class="text-center">Class</th> <th colspan="6"  class="text-center">Section</th>  </tr> 
                         
                                 <tr  style="background-color:#1592b4;color:white;">     <td class="tr-heading">ART </td> <td class="tr-heading">COM </td>     <td class="tr-heading">SCI </td>  <td class="tr-heading"> -</td>  <td class="tr-heading"> -</td>  <td class="tr-heading"> Action</td>    </tr>
                                                      <?php 
                                          include_once 'dbfiles/db.php';
                                          $db=new db();
                                          $db->connect();
                                            $res=mysqli_query($db->conn,"SELECT * FROM `school_strength` WHERE id  BETWEEN 14 and 15");
                                             while($row=mysqli_fetch_array($res))
                                             {
                
                                                echo"  <form action='dbfiles/dbadmin-section-and-strength' method='post'> 
                                                <tr>
                                                <th scope='row'> $row[1]  </th>
                                                <td><input type='text' name='col1' value='$row[2]'>  </td> 
                                                <td><input type='text'  name='col2' value='$row[3]'> </td>   
                                                <td> <input type='text'  name='col3' value='$row[4]'> 
                                                <input type='hidden'  name='idd' value='$row[0]'> </td>    
                                                <td> <input type='text'  name='col4' value='$row[5]'></td>
                                                <td> <input type='text'  name='col5' value='$row[6]'></td>
                                                <td> <input  type='submit' name='submit' class='btn  btn-block bg-primary' value='Update'> </td>
                                                </tr></form>";
          
                                                 }
                                                     mysqli_close($db->conn);
                                                    ?>  
     </table>
                  </div> 
              </div>
            
                
 
          </div>
        </div>
        
      </div>
    </section> 
 
 
 
 
 

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
 
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
 </html>
 
 
 
 
 
      