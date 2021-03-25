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
      


       $pass_decode = password_verify($password, $db_pass);

       if ($pass_decode) {

        ?>
  <script>
    alert("login Succsessful");
  </script>
  <?php
         
        ?>
        <script>
           location.replace("admin.php")
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
 <form action="" method="POST" enctype="multipart/form-data" id="loginform">
              <input type="email" placeholder="Enter email" name="email">
              <input type="password" placeholder="Enter password" name="password" required>
              <button type="submit" name="submit" class="btn">Login</button><br>
              <a href="recover_email.php">Forgot passowrd</a>
            </form>