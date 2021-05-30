<?php
     if(isset($_POST["submit"])){ 
        include_once 'dbfiles/db.php';
          $db=new db();
          $db->connect();
          
         $name=mysqli_real_escape_string($db->conn, $_POST["name"]);        
         $place= mysqli_real_escape_string($db->conn, $_POST["place"]);      
         $datee1= $_POST["datee1"];    
          $datee2= $_POST["datee2"];  
           $time1= $_POST["time1"];   
            $time2= $_POST["time2"];  
         $descrip= mysqli_real_escape_string($db->conn, $_POST["descrip"]);
            $photopath= uniqid()."-".$_FILES['photo']['name'];  
              
                        $picpath = "uploadimages/CreateEvent/";
            // get the image extension
            $extension = substr($photopath,strlen($photopath)-4,strlen($photopath));
            // allowed extensions
                    $allowed_extensions = array(".jpg" ,".JPG","jpeg",".png",".gif");
                    // Validation for allowed extensions .in_array() function searches an array for a specific value.
                    if(!in_array($extension,$allowed_extensions))
                    {
                    echo "   <script>    alert('Invalid format. Only jpg / jpeg/ png /gif format allowed'); </script> ";
                     echo"<script>window.location='create-event'</script>";
                    }
                     
                      else if (($_FILES["photo"]["size"] > 1000000)) {
                          
                           echo"<script>  alert('Sorry Please Try Again...  Image size exceeds 1MB');</script>";
                            echo"<script>window.location='create-event'</script>";
                                     //echo"<script>window.location='create-event'</script>"; 
                            
                                }    // Validate image file dimension
                     
                    
                    
                    else
                                {
                              
                        $photo =  $picpath.$photopath;
                      
                           
                    
            
                       
                             
     
    
   
         
  $query="insert into cretevent values(null,'$name','$place','$datee1','$time1','$datee2','$time2','$descrip','$photo',1)";
      mysqli_query($db->conn,$query);
      
 $res = move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
      
          if($res){ 
            echo"<script> alert('Event Created  Successfully...!!!');</script>";
                  echo"<script>window.location='create-event'</script>";
           
          } 
 else { 
   
     echo"<script>  alert('Sorry Please Try Again...');  </script>";
          echo"<script>window.location='create-event'</script>";
       
 }
      mysqli_close($db->conn);
        
      
                 
                             
                            }
             }
      
      
          
         
        ?>
        