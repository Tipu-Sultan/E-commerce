<?php 
session_start();

 ?>
<?php
    include 'dbase.php';

    if (isset($_POST['submit'])) {

      $email = $_POST['email'];
      $password = $_POST['password'];

      $email_search = " select * from redcart where email='$email' and status='active'  ";
      $query =  mysqli_query($con,$email_search);

      $email_count = mysqli_num_rows($query);

      if ($email_count) {
       $email_pass = mysqli_fetch_assoc($query);

       $db_pass = $email_pass['password'];

       $_SESSION['username'] = $email_pass['username'];
       $_SESSION['image'] = $email_pass['image'];
       $_SESSION['id'] = $email_pass['id'];
       $_SESSION['enrollment_id'] = $email_pass['enrollment_id'];
       $_SESSION['mobile'] = $email_pass['mobile'];
       $_SESSION['email'] = $email_pass['email'];

       /////////////////
      $_SESSION['address'] = $email_pass['address'];
        $_SESSION['gender'] = $email_pass['gender'];
        $_SESSION['designation'] = $email_pass['designation'];
        $_SESSION['linked'] = $email_pass['linked'];
        $_SESSION['insta'] = $email_pass['insta'];
        $_SESSION['dob'] = $email_pass['dob'];
        $_SESSION['state'] = $email_pass['state'];
        $_SESSION['university'] = $email_pass['university'];
         $_SESSION['status'] = $email_pass['status'];
        $_SESSION['password'] = $db_pass['password'];


       $pass_decode = password_verify($password, $db_pass);

       if ($pass_decode) {

        ?>
  <script>
    alert("login Succsessful");
  </script>
  <?php
         
        ?>
        <script>
           location.replace("home.php")
        </script>
        <?php
       }else{
       $_SESSION['msgs'] = "Incorrect password!";
       $_SESSION['msgs_code'] = "error";
        header('location:index.php');
        }
      }else{
        $_SESSION['msgs'] = "Invalid email, choose correct Email !";
        $_SESSION['msgs_code'] = "Error";
         header('location:index.php');
      }
    }
    ?>
