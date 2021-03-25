<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>recoer_pass</title>
    <?php include '../links/link.php'; ?>
    <?php include '../css/log.php'; ?>
    
  </head>
  <body>

    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Reset your password</h4>
    <p class="text-center">please fill correct email here</p>

  
        <form action="resetpass.php" method="POST">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              
            </div>
            <input type="email" class="form-control" name="email"  placeholder="email address" required>
            </div><!-- <!....from-group//..> -->
            <div>
     
        </P>
            <div class="form-group">
              <button type="submit" name="submit"  class="btn btn-primary btn-block">send email</button>
              
            </div>
            <a href="register.php" class="button btn btn-danger btn-sm" style="float: left;">SignUp</a>
            <a href="account.php" class="button btn btn-primary btn-sm" style="float: right;">login</a>
            </p>
            
          </form>
          
          
        </div>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
if (isset($_SESSION['msgs']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['msgs_code'];?>",
  text: "<?php echo $_SESSION['msgs'];?>",
  icon: "error",
  button: "Try Again!",
});
</script>
  <?php
  unset($_SESSION['msgs']);
}
 ?>
 <!-- ////////////////// -->

      </body>
    </html>