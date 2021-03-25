<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Sultan-Store | E-commerce</title>
 <?php include '../css/index.php'; ?>
  

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
	
</head>
<body>


	<div class="header" >
		<div class="container">
	<div class="navbar" >
	<div class="logo">
		<img src="../images/logo.png" width="125px">
	</div>
		
	
	</div>
    <div class="account-page">
    <div class="container">
	<div class="row">
		<div class="col-2">
        <img src="../images/image1.png" alt="redstore">
		</div>

		<div class="col-2">
			<div class="form-container">
				<div class="form-btn">
            <span onclick="login()">Login</span>
            <span onclick="register()">Register</span>
            <hr id="indicator"> 
            </div>
            <form action="login.php" method="POST" enctype="multipart/form-data" id="loginform">
            	<input type="email" placeholder="Enter email" name="email">
            	<input type="password" placeholder="Enter password" name="password" required>
            	<button type="submit" name="submit" class="btn">Login</button><br>
            	<a href="recover_email.php">Forgot passowrd</a>
            </form>

            <form action="register.php" method="POST" enctype="multipart/form-data" id="regform">
            	<input type="text" placeholder="Enrollment" name="enrollment_id">
            	<input type="text" placeholder="Username" name="username">
            	<input type="number" placeholder="Enter mobile" name="mobile">
            	<input type="email" placeholder="Enter email" name="email">
            	<input type="password" placeholder="Make password" name="password">
            	<input type="password" placeholder="Confirm password" name="cpassword">
            	<input type="file" placeholder="Confirm password" name="image">
            	<button type="submit" name="submit" class="btn">Register</button>
            	
            </form>

            </div>
		</div>
	</div>
	</div>
</div>
</div>

  

<!-- ///////////////////// -->




<!-- .............footer ............ -->

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download Our App</h3>
				<p>Download app for android</p>
				<div class="app-logo">
					<a href=""><img src="../images/play-store.png"></a>
					<a href=""><img src="../images/app-store.png"></a>
				</div>
			</div>
			<div class="footer-col-2">
				<img src="../images/logo-white.png">
				<p>Our Purpose Is To Sustainably make the pleasure.</p>
			</div>
			<div class="footer-col-3">
				<h3>Useful links</h3>
				<ul>
					<a href=""><li>Coupons</li></a>
					<a href=""><li>Blog</li></a>
					<a href=""><li>Return Policy</li></a>
					<a href=""><li>Joim Affiliate</li></a>

				</ul>
			</div>
			<div class="footer-col-4">
				<h3>Follow Us</h3>
				<ul>
					<a href=""><li>Insta</li></a>
					<a href=""><li>Twitter</li></a>
					<a href=""><li>facebook</li></a>
					<a href=""><li>Youtube</li></a>
					<a href=""><li>Whatsapp</li></a>

				</ul>
			</div>
		</div>
		<hr>
		<p class="copy">Copyright 2021-22 - By Tipu Sultan</p>
	</div>
</div>


<script>
	var menuitems = document.getElementById("menuitems");
	menuitems.style.maxHeight = "0px";
	function menutoggle(){
		if (menuitems.style.maxHeight == "0px") {
			menuitems.style.maxHeight = "200px";
		}else{
			menuitems.style.maxHeight = "0px";
		}
	}
</script>

<script type="text/javascript">
	
	var loginform = document.getElementById("loginform");
	var Regform = document.getElementById("Regform");
	var indicator = document.getElementById("indicator");

	function register(){
		regform.style.transform = "translateX(0px)";
		loginform.style.transform = "translateX(0px)";
		indicator.style.transform = "translateX(100px)";

	}
	function login(){
		regform.style.transform = "translateX(300px)";
		loginform.style.transform = "translateX(300px)";
		indicator.style.transform = "translateX(0px)";

	}
</script>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   
 <!-- ///////////// -->
 <?php 
if (isset($_SESSION['msgs']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['msgs_code'];?>",
  text: "<?php echo $_SESSION['msgs'];?>",
  icon: "error",
  button: "Opps!",
});
</script>
  <?php
  unset($_SESSION['msgs']);
}
 ?>
  <!-- ///////////// -->
<?php 
if (isset($_SESSION['win']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['win_code'];?>",
  text: "<?php echo $_SESSION['win'];?>",
  icon: "success",
  button: "Bravo!",
});
</script>
  <?php
  unset($_SESSION['win']);
}
 ?>

?>


<!--  ///////////////////// -->
<?php 
if (isset($_SESSION['del']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['del_code'];?>",
  text: "<?php echo $_SESSION['del'];?>",
  icon: "success",
  button: "Bye SEE U!",
});
</script>
  <?php
  unset($_SESSION['del']);
}
 ?>

?>


</body>
</html>