<?php
 if(isset($_POST["submit"])){ 
 
$email=$_POST["email"];
$class=$_POST["class"];
$phone=$_POST["phone"]; 
$dob=$_POST["dob"];

   $msg=" Email: "."".$email.",\n Class:"." ". $class.", \n phone:"." ". $phone.",\nDate Of Birth: "."". $dob.", ";
$to      = 'info@snspsladwa.org';
$subject = 'New Email';
$message = $msg;
 

if(mail($to, $subject, $message))
{
     echo"<script>alert('Mail Sent successfully....');</script>"; 
      echo"<script>window.location='home'</script>";
  
}
else{
    echo"<script>alert('Sorry Try Again...!!');</script>";
      echo"<script>window.location='home'</script>";
}
}
?> 