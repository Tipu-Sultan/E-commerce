<?php
session_start();
	if (!isset($_SESSION['username'])) {
  ?>
  <script>
    alert("logged out");
  </script>
  <?php
  header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Sultan-Store | E-commerce</title>
 <?php include '../css/index.php'; ?>
  <?php include '../css/slide.php'; ?>
	<meta charset="utf-8" content="60;url=logout.php" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="24699870289-m60fhv3cnit47tv6l70fimh46o0cm44b.apps.googleusercontent.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js" integrity="sha512-yrjEr6HY46i3hW7imuklZtRM7q1wyNUz8smKl2130OHTFHGbXGpHN4nYxrIeu0uJprDsLhycYY+xQ368d9OiaQ==" crossorigin="anonymous"></script>

   <!--  <script type="text/javascript">
    	function CheckUserTime(){

    		$.ajax({

    			url:"check-user-time,php",
    			method:"post",
    			success:function(response)
    			{
    				if (response == 'logout') 
    				{

    					window.location.href="logout.php";

    				}
    			}
    		});
    	}
    	setInterval(function){
    		CheckUserTiime();

    	},(200);

    </script> -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

</head>
<body>
	<div class="header" >
		<div class="container">
	<div class="navbar" >
	<div class="logo">
		<img src="../images/logo-2.png" width="125px">
	</div>
		<nav>
			<ul id="menuitems">
			    <li><a href="" class="a"><i class="fa fa-home" aria-hidden="true">Home</i></a></li>
				<li><a href="" class="a">Products</a></li>
				<li><a href="" class="a">About</a></li>
				<li><a href="" class="a"><i class="fa fa-user" aria-hidden="true"></i> Account</a></li>
				<li><a href="" class="a"><i class="fa fa-shopping-bag" aria-hidden="true">Cart</i></a></li>



<div class="dropdown">
  <span class="userbutton"><span class="usertext mr-1" style="color: #000;font-weight: bold;  text-transform: uppercase;
margin-top: 10px;"><?php echo $_SESSION['username'];?></span><span class="avatars"><span class="avatar current"> <img style="border-radius: 50%;" src="../uploads/<?php echo $_SESSION['image']?>"alt="?" height="50" width="50"></span></span></span>
  <div class="dropdown-content">
     <a href="logout.php">Logout</a><br>
      <a href="profile.php?id=<?php echo $_SESSION['id']?>">Profile</a>
  </div>
</div>
			
		</ul>
		</nav>
		<img src="../images/menu.png" class="menu-icon" onclick="menutoggle() ">
	</div>
	<div class="row">
		<div class="col-2">
			<h1>Give Your Life A <br> New Style With <span class="red">DESIGNEVO</span></h1>
			<p>Success isn't alwasy about greatness. It's about consistency. <br> consistent hard work gains success. Greatness will come.</p>
			<a href="" class="btn">Explore &#8594</a>
		</div>
		<div class="col-2">
			<img src="../images/image1.png" alt="redstore">
			
		</div>
	</div>
	 <div class="row showcase" id="SliderSec">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-user fa-2x"></i></div>
                        <h4 style="color: black; font-size: 30px;"><span class="counter spanMedia">1,524,266</span><span style="font-size: 50px;"></span><br>Customer Satisfaction</h4>
                    </div>
                </div>
</div>
</div>
</div>
</div>

<br>




<div id="owl-demo" class="owl-carousel owl-theme">
	<div class="item"><a href="cart.php?id=<?php echo  $_SESSION['id'] ?>"><img src="../images/product-1.jpg"></a>
			<h4>Maroon Half T-shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹299.00</p></div>

	  <div class="item"><a href="cart.php?id=<?php echo  $_SESSION['id'] ?>"><img src="../images/product-2.jpg"></a>
			<h4>Black Sneakers Shoes</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹399.00</p></div>

<!-- ///////////owl/////////// -->
  <div class="item"><a href="cart.php"><img src="../images/product-3.jpg"></a>
			<h4>Grey Shinning lower</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹351.00</p>
  </div>
  <div class="item"><a href="cart.php"><img src="../images/product-4.jpg"></a>
			<h4>Blue POLO Half T-shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹399.00</p></div>
  <div class="item"><a href="cart.php"><img src="../images/product-5.jpg"></a>
			<h4>White Half-boot Shoes</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹510.00</p></div>
  <div class="item"><a href="cart.php"><img src="../images/product-6.jpg"></a>
			<h4>Black Printed  half t-shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹279.00</p></div>
  <div class="item"><a href="cart.php"><img src="../images/product-7.jpg"></a>
			<h4>Multi-colour Shocks</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹199.00</p></div>
  <div class="item"><a href="cart.php"><img src="../images/product-8.jpg"></a>
			<h4>All Black Fossil Stylish Watch</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹1299.00</p></div>
  <div class="item"><a href="cart.php"><img src="../images/product-9.jpg"></a>
			<h4>Phantom Grey-black Fossil Watch</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹1099.00</p></div>
  <div class="item"><a href="cart.php"><img src="../images/product-10.jpg"></a>
			<h4>White Snearker Shoes</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹399.00</p></div>
  <div class="item"><a href="cart.php"><img src="../images/product-11.jpg"></a>
			<h4>Maroon Printed Half T-shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹251.00</p></div>
</div>
 
<div class="customNavigation">
  <a class="btn stop">Stop</a>
  <a class="btn play">play</a>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>


<!-- ////////next feature categories////////// -->	
<div class="categories">
	<div class="small-container">
		<div class="row">
	<div class="col-3 zoom">
		<a href="cart.php"><img src="../images/category-1.jpg">
		<div class="centered btn">Add to cart</div></a>
	</div>
	<div class="col-3 zoom">
		<a href="cart.php"><img src="../images/category-2.jpg">
		<div class="centered btn">Add to cart</div></a>
	</div>
	<div class="col-3 zoom">
		<a href="cart.php"><img src="../images/category-3.jpg">
		<div class="centered btn">Add to cart</div></a>
	</div>
	
</div>
</div>
</div>

<!-- /*///////////Products///////////*/ -->

<div class="small-container">
	<h2 class="title">Featured Products</h2>
	<div class="row">
		<div class="col-4">
			<img src="../images/product-1.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p>₹399.00</p>
		</div>
		<div class="col-4">
			<img src="../images/product-2.jpg">
			<h4>Black Sneaker Shoes</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p>₹399.00</p>
		</div>
		<div class="col-4">
			<img src="../images/product-3.jpg">
			<h4>Grey Shinnig lower</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p>₹399.00</p>
		</div>
		<div class="col-4">
			<img src="../images/product-4.jpg">
			<h4>Blue POLO T-shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p>₹399.00</p>
		</div>
	</div>
	<!-- ////////Latest Products////////// -->
	<h2 class="title">Latest Products</h2>
	<div id="owl-demo" class="owl-carousel owl-theme">
	<div class="item"><a href=""><img src="../images/product-1.jpg"></a>
			<h4>Maroon Half T-shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹299.00</p></div>
  <div class="item"><a href=""><img src="../images/product-2.jpg"></a>
			<h4>Black Sneakers Shoes</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹399.00</p></div>
  <div class="item"><a href=""><img src="../images/product-3.jpg"></a>
			<h4>Grey Shinning lower</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
cart.php				
			</div>
			<p class="p">₹351.00</p>
  </div>
  <div class="item"><a href=""><img src="../images/product-4.jpg"></a>
			<h4>Blue POLO Half T-shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹399.00</p></div>
  <div class="item"><a href=""><img src="../images/product-5.jpg"></a>
			<h4>White Half-boot Shoes</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹510.00</p></div>
  <div class="item"><a href=""><img src="../images/product-6.jpg"></a>
			<h4>Black Printed  half t-shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹279.00</p></div>
  <div class="item"><a href=""><img src="../images/product-7.jpg"></a>
			<h4>Multi-colour Shocks</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹199.00</p></div>
  <div class="item"><a href=""><img src="../images/product-8.jpg"></a>
			<h4>All Black Fossil Stylish Watch</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹1299.00</p></div>
  <div class="item"><a href=""><img src="../images/product-9.jpg"></a>
			<h4>Phantom Grey-black Fossil Watch</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹1099.00</p></div>
  <div class="item"><a href=""><img src="../images/product-10.jpg"></a>
			<h4>White Snearker Shoes</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹399.00</p></div>
  <div class="item"><a href=""><img src="../images/product-11.jpg"></a>
			<h4>Maroon Printed Half T-shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<p class="p">₹251.00</p></div>
</div>
 
<div class="customNavigation">
  <a class="btn stop">Stop</a>
  <a class="btn play">play</a>
</div>
</div>

<script type="text/javascript">

	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
});

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[2000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>
<!-- ///////////offer////////// -->
<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<img src="../images/exclusive.png" class="offer-img">
			</div>
			<div class="col-2">
				<p>Exclusivly Available on RedStore</p>
				<h1>Smart Band 4</h1>
				<small>The mi Smart band 4 Feature a 39.9% larger(than mi band 3) Amoled color full-touch display with adjustable brightness, so Everything is clear as can be. </small>
				<a href="#" class="btn">Buy Now &#8594;</a>
			</div>
		</div>
	</div>
</div>

<!-- //////////////////testimonial section/////////// -->

<div class="testimonial">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<img src="../images/user-1.png">
			<h3>SUlTAN</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<img src="../images/user-2.png">
			<h3>Ahad</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>	
				
			</div>
			<img src="../images/user-3.png">
			<h3>Haizal</h3>
			</div>
		</div>
	</div>
</div>


 <!-- ...........brands........... -->

<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-5">
				<img src="../images/logo-godrej.png">
			</div>
			<div class="col-5">
				<img src="../images/logo-oppo.png">
			</div>
			<div class="col-5">
				<img src="../images/logo-coca-cola.png">
			</div>
			<div class="col-5">
				<img src="../images/logo-philips.png">
			</div>
			<div class="col-5">
				<img src="../images/logo-paypal.png">
			</div>
		</div>
	</div>
</div>



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
				<img src="../images/logo-2.png">
				<p>Our Purpose Is To Sustainably make the pleasure.</p>
			</div>
			<div class="footer-col-3">
				<h3>Useful links</h3>
				<ul>
					<a href=""><li>Coupons</li></a>
					<a href=""><li>Blog</li></a>
					<a href=""><li>Return Policy</li></a>
					<a href=""><li>Joim Affiliate</li></a>
					<a href="database.php"><li>Database</li></a>

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
<!-- 

<div class="owl-carousel owl-theme">
    <div class="item-video" data-merge="2"><iframe width="560" height="315" src="https://www.youtube.com/embed/aka_iy49R4U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    <div class="item-video" data-merge="3"><iframe width="560" height="315" src="https://www.youtube.com/embed/aka_iy49R4U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    <div class="item-video" data-merge="1"><iframe width="560" height="315" src="https://www.youtube.com/embed/aka_iy49R4U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    <div class="item-video" data-merge="2"><iframe width="560" height="315" src="https://www.youtube.com/embed/woL0YlCqO64" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</div>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
        items:1,
        merge:true,
        loop:true,
        margin:10,
        autoplay:true,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })
</script>


 -->

 <!--  js for toggle -->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/waypoints.min.js"></script>
<script type="text/javascript">
	$('.counter').counterUp({
  delay: 10,
  time: 3000
  
});
</script>
</body>
</html>