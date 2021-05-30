<?php 
session_start();
if(!isset($_SESSION['un']))
{
header("location:admin-login");
}
?>
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
<title>Admin Panel | Gallery - Sant Nischal Singh Public School, Ladwa</title>

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
              <h2 class="text-theme-colored2 font-36">Manage Galley</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
           
                <li class="active">Manage Galley</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
   
   
   
   
   
    <!-- Section: Images uPload Form -->
 
 
      <section>
      <div class="container">
        <div class="row">
              <p class="text-center">  </p>
          <div class="col-md-8 col-md-offset-2">
              <ul class="nav nav-tabs">
              
              <li class="active"><a href="#del" data-toggle="tab">Delete  images</a></li>
            </ul>
            <div class="tab-content">
       
              
              
              
              
                <div class="tab-pane fade active in p-15" id="del">
                    
                    
                       <form action="#" method="post" enctype="multipart/form-data">
                    
                     <div class="row"> 
                    <div class="col-sm-6">  
                    <div class="form-group">
                         <label  >Category list:</label>
                              <select name="catdrop" class="form-control" > 
                                  
                                  
                                     	<?php
			 $sql = "SELECT DISTINCT category FROM images ";
					 $result = mysqli_query($db->conn,$sql);


			 while($row = mysqli_fetch_assoc($result)){
					 $category= $row['category'];
					
				 
			   ?>
				    
			  <option  value="<?php echo $category; ?>"> <?php  $text = $category; $final = preg_replace('#[ -]+#', '-', $text); $string = $final; $arr = explode("-",$string);
$string = implode(" ",$arr); $data = ucwords($string); echo $data ; ?></option>
			
				    
               <?php } ?>
                                  
                                  
					       
                              </select>
                     
                    </div>
                  </div>
                    
                       <div class="form-group"> 
                    <button type="submit" name="submit1"  class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Submit Category</button>
                </div>
                 
              </form>
                    
                           <?php
             include_once 'dbfiles/db.php';
            $db=new db();
          $db->connect();
          
          if(isset($_POST["submit1"])){
          
                    	$catdrop = $_POST['catdrop'];
                 
         
          
  	 $sql = "SELECT  * FROM images where category = '$catdrop' ";
					 $result = mysqli_query($db->conn,$sql);
             
       
          
 echo "<form action='#' method='post'>"; 
 
        echo " <div class='table-responsive'>";
         $text = $catdrop; $final = preg_replace('#[ -]+#', '-', $text); $string = $final; $arr = explode("-",$string);
$string = implode(" ",$arr); $data = ucwords($string); echo  "<center>". "<h3>"." Show Images From ".$data . "</h3>". "</center>" ; 
 echo"<table class='table table-hover '>";
    echo "<thead>";
      echo "<tr class='td-heading-bgcolor'>";
          echo "<th class='td-heading-color'>Id</th>"; 
           
        echo "<th class='td-heading-color'> image Title</th>";
         echo "<th class='td-heading-color'>Images</th>";
        echo "<th class='td-heading-color'>Action</th>";
 
        
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $sno=1;
while($row = mysqli_fetch_array($result))
  {
      	$image_src = "img/gallery/".$row[2];
   
  
 
  
  echo "<tr class='table-primaryy'>";
  echo "<td  class='white-color-td'> " . $sno . "  </td>";
   
  
  echo "<td  class='white-color-td'>  <img class= 'img-responsive'  width='200' height='200' src=' " . $image_src ." ' > </td>";
  
   
    
    echo "<td  class='white-color-td'>" . $row[1] . "</td>"; 
  echo "<td  class='white-color-td '><a href='dbfiles/dbgallery-delete?id=$row[0]'> <p style='color:red;'>Delete</p></a>  </td>";
 
               
    
  echo "</tr>";
    $sno++;
  }
  
        
   
   echo " </tbody>";
  echo "</table>";
   echo "</div> "; 
echo "</form>";
  }
?>
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
 