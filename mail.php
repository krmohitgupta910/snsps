<?php
 if(isset($_POST["submit"])){ 
$nam=$_POST["name"];
$email=$_POST["email"];
$sub=$_POST["subject"];
$phone=$_POST["phone"]; 
$msg=$_POST["message"];

   $msg=" Name: "."".$nam.",\n Email: "."".$email.",\n Subject:"." ". $sub.", \n phone:"." ". $phone.",\nMessage: "."". $msg.", ";
$to      = 'info@snspsladwa.org';
$subject = 'Contact Us Email';
$message = $msg;
 

if(mail($to, $subject, $message))
{
     echo"<script>alert('Mail Sent successfully....');</script>"; 
      echo"<script>window.location='contact-us'</script>";
  
}
else{
    echo"<script>alert('Sorry Try Again...!!');</script>";
      echo"<script>window.location='contact-us'</script>";
}
}
?> 