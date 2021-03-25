<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign-up</title>
    <?php include '../links/link.php'; ?>
    <?php include '../css/log.php'; ?>
    
  </head>
  <body>
<?php
      include 'dbase.php';
     if (isset($_POST['submit'])){
              
$product = mysqli_real_escape_string($con, $_POST['product']) ;
$price = mysqli_real_escape_string($con, $_POST['price']) ;



$image =  $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, "../product/$image");



$productquery = "select * from product where product='$product' ";
$query = mysqli_query($con,$productquery);
$productcount = mysqli_num_rows($query);

  if($productcount>0){
    ?>
  <script>
        alert("Product already exists!");
  </script>
  <?php 
    }else{

    $insertquery = "insert into product(image, product, price) values( '$image','$product','price')";
  $iquery = mysqli_query($con, $insertquery);
  if ($iquery) {
            ?>
  <script>
        alert("Product inserted!");
  </script>
  <?php     
  }else {
      ?>
  <script>
        alert("inserted failed!");
  </script>
  <?php
  }
  
  }
  }
  ?>
<?php echo $_SESSION['username'];?></span><span class="avatars"><span class="avatar current"> <img style="border-radius: 50%;" src="../uploads/<?php echo $_SESSION['image']?>"alt="?" height="50" width="50">
    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
        <p><a href="logout.php">logout</a></p>
       
        
       
      
      <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
        <div class="form-group input-group">
          <div class="input-group-prepend">
            
            
          </div>

          <label for="file">Upload Product photo</label>
                      <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-file"></i></span>
                        
                      </div>
                        <input type="file" class="form-control" name="image" id="file" >
                      </div>
         <!-- <!....from-group//..> -->
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-info"></i></span>
                
              </div>
              <input type="text" class="form-control" name="product"  placeholder="Product details" required>
              </div><!-- <!....from-group//..> -->
              <p class="px-2" style="color: red;">
            <?php 

             if (isset($_SESSION['passmsg'])) {
               echo $_SESSION['passmsg'];
             }

           ?>

           </p>
              
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-tags"></i></span>
                    
                  </div>
                  <input type="text" class="form-control" name="price"  placeholder="Product price" required>
                  </div><!-- <!....from-group//..> -->
            
 <div>
      <p class="px-4" style="color: red;"> 
        <?php 
      if (isset($_SESSION['msgss'])) {
        echo $_SESSION['msgss'];
      }else{
        echo $_SESSION['msgss'] = "";

      }
       ?> 
       </div>
              
                    
                      <br class="pb-2">
                      
                      <div class="form-group">
                        <button type="submit" name="submit"  class="btn btn-primary btn-block">Insert product</button>
                        
                      </div>
                     
                      
                      
                    </form>
                    
                  </article>
                  </div><!-- <.............card..... -->
                </div>
              </div>
            </div>


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
if (isset($_SESSION['passmsgs']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['passmsgs_code'];?>",
  text: "<?php echo $_SESSION['passmsgs'];?>",
  icon: "error",
  button: "Try Again!",
});
</script>
  <?php
  unset($_SESSION['passmsgs']);
}
 ?>
<!-- //////////////////////// -->

<?php 
if (isset($_SESSION['passmsg']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['passmsg_code'];?>",
  text: "<?php echo $_SESSION['passmsg'];?>",
  icon: "error",
  button: "Try Again!",
});
</script>
  <?php
  unset($_SESSION['passmsg']);
}
 ?>
          </body>
        </html>