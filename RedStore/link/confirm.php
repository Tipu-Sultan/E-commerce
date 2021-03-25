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

    <div class="card bg-light" style="max-width: 400px;  margin-left: auto;
  margin-right: auto; top: 200px;">
      <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="text-success display-4 card-title mt-3 text-center">Are you sure !</h4>
    <p class="text-center">Once deleted, you will not be able to recover this user Account!</p>

  
            <a href="profile.php" class="button btn btn-danger btn-sm" name="submit" style="float: left;">No</a>
            <a href="deleteac.php?idth=<?php echo $_SESSION['id'];?>" class="button btn btn-primary btn-sm" style="float: right;">Yes Delete it!</a>
            </p>
            
          </form>
          
          
        </div>

 <!-- ////////////////// -->

      </body>
    </html>