<?php
session_start();

?>

<!-- ///////////// -->
<?php
      include 'dbase.php';
     if (isset($_POST['submit'])){
 $enrollment_id = mysqli_real_escape_string($con, $_POST['enrollment_id']) ;             
$username = mysqli_real_escape_string($con, $_POST['username']) ;
$mobile = mysqli_real_escape_string($con, $_POST['mobile']) ;
$email = mysqli_real_escape_string($con, $_POST['email']) ;
$password= mysqli_real_escape_string($con, $_POST['password']) ;
$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;


$image =  $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, "../uploads/$image");

              
$pass = password_hash($password, PASSWORD_BCRYPT);
$cpass = password_hash($cpassword, PASSWORD_BCRYPT);


$token =bin2hex(random_bytes(15));

$emailquery = "select * from redcart where email='$email' ";
$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);

  if($emailcount>0){
   
   $_SESSION['msgs'] = "Email already exists !";
    $_SESSION['msgs_code'] = "Error";
    header('location:index.php');
    }else{


$emailquery = "select * from redcart where email='$email' ";
$query = mysqli_query($con,$userquery);
$usercount = mysqli_num_rows($query);

  if($usercount>0){
   
   $_SESSION['msgs'] = "user already taken !";
    $_SESSION['msgs_code'] = "Error";
    header('location:index.php');
    }

    if($password === $cpassword){

    $insertquery = "insert into redcart(enrollment_id,username, mobile, email, password, cpassword, image, token, status) values('$enrollment_id','$username','$mobile','$email','$pass','$cpass','$image','$token','inactive')";
  $iquery = mysqli_query($con, $insertquery);
  if ($iquery) {
                
  $subject = "Email Activation via(Tipu Sultan) ";
  $body = " Hi, $username. An account verification was requested for your email id='$email' from this $sender_email.
  click here to activate your user account http://localhost/RedStore/link/activate.php?token=$token for further problems please contact this number '9919408817'. Thank You ";
  $sender_email = "From:tipusultann777@gmail.com";

  if (mail($email, $subject, $body, $sender_email)){

$_SESSION['win'] = "Hi $username check your mail $email to activate your account.";
$_SESSION['win_code'] = "Almost done!";

      header('location:index.php');

  } else {
      ?>
  <script>
        alert("Email sending Failed..!");
  </script>
  <?php
  }
                
  }else{
  ?>
  <script>
        alert("Registration Failed!");
  </script>
  <?php
  }
  }else{
  
  
   $_SESSION['msgs'] = "Password are not matched";
   $_SESSION['msgs_code'] = "error";
    header('location:index.php');
   
  }
  }
  }
  ?>

<!-- //////////////////////// -->



          