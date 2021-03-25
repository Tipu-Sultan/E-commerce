<?php 

session_start();
 ?>
<?php
include 'dbase.php';

if (isset($_POST['submit'])){

$email = mysqli_real_escape_string($con, $_POST['email']) ;
$emailquery = "select * from redcart where email='$email' ";
$query = mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);


if($emailcount){

  $userdata = mysqli_fetch_array($query);

  $username = $userdata['username'];

  $token = $userdata['token'];

  $subject ="password reset";
  $body = "Hi, $username. This is forgot password confirmation for this email=$email. Click here to reset your password http://localhost/redstore/link/reset_password.php?token=$token this link valid for 15 minutes for further problems contact this number '9919408817' Thank You ! ";

  $sender_email = "From: tipusultann777@gmail.com";

  if (mail($email, $subject, $body, $sender_email)) {
    $_SESSION['win'] = "Hi $username check your mail id $email to reset your password !";
    $_SESSION['win_code'] = "Almost Done!";

    header('location:index.php');
  }else{
     ?>
  <script>
        alert("Email sending failed..");
  </script>
  <?php
  
}
}else{
  $_SESSION['msgs'] = "Invalid email, choose correct Email !";
  $_SESSION['msgs_code'] = "error";
  header('location:recover_email.php');
}
}


?>