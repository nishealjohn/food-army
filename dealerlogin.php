<?php if (array_key_exists('id', $_GET)) {
   
}
else{
  header("location:dealerlogin.php?id=1");
}
?>

<?php 
include("function/functions.php")
?>
<html>
<head>
<title>Armed Medicine And Food!</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<style >
.bg1{
	background:background: -moz-linear-gradient(45deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.65) 2%, rgba(0,0,0,0.65) 100%); /* ff3.6+ */
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(0,0,0,0.2)), color-stop(2%, rgba(0,0,0,0.65)), color-stop(100%, rgba(0,0,0,0.65))); /* safari4+,chrome */
background: -webkit-linear-gradient(45deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.65) 2%, rgba(0,0,0,0.65) 100%); /* safari5.1+,chrome10+ */
background: -o-linear-gradient(45deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.65) 2%, rgba(0,0,0,0.65) 100%); /* opera 11.10+ */
background: -ms-linear-gradient(45deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.65) 2%, rgba(0,0,0,0.65) 100%); /* ie10+ */
background: linear-gradient(45deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.65) 2%, rgba(0,0,0,0.65) 100%); /* w3c */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000',GradientType=1 ); /* ie6-9 */
}
	@media(max-width: 500px)
	{
		.cfit{
			margin-right: 10px;
			float: right;
		}
	}
</style>
<!-- start-smoth-scolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<a href="offer.html"><img src="images/donwload.png" style="width: 300px;height: 300px;" class="img-head" alt=""></a>
<a href="offer.html"><img src="images/donwload.png" style="width: 800px;height: 800px;opacity: .5;margin-top: 500px;z-index: -100;" class="img-head" alt=""></a>


<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 style="font-size: 40px;"><a href="index.php"><b>T<br>H<br>E</b>Armed Medicine And Food!<span>A Help To Indian Army !Supply of Medicine  <br>sAnd Food To The Army At Peaks</span></a></h1>
			</div>
			<div style="font-size: 20px;" class="head-t">
				<ul class="card">
					<li><a href="wishlist.html" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
					<li><a href="dealerlogin.php" ><i class="fa fa-ship" aria-hidden="true"></i>Employee Login</a></li>
				</ul>	
			</div>
			
			<div style="font-size: 30px;" class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs" style="font-size: 25px;">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Medicine <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Headache</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blood Pressure </a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Vitanim Supply</a></li>
												
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Extras</a></li>
												
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											
										</div>
										<div class="col-sm-3 w3l">
											<a href="kitchen.html"><img src="images/cm2.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
							
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Food Material Supply<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<ul class="multi-column-dropdown">
												<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Food Material</a></li>
												<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Mineral Oil</a></li>
												<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Households</a></li>
												
											</ul>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
											
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="care.html"><img src="images/me.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							
							<li><a href="codes.html" class="hyper"> <span>Extra</span></a></li>
							<li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>
					 <div style="font-size: 30px;margin-bottom: 50px;" class="cart cfit" >
				

						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
  <!---->
<div data-vide-bg="video/video">
<div class="bg1"  >
    <div class="container" >
    
		<div class="banner-info" >
			<h3> Help The Army ! Serve For The Nation.. </h3>	
			<div class="search-form">
								<form .phpn="search.php" method="get">
					<input   type="text" placeholder="Search..." name="id">
					<input style="float: right;" type="submit" value="" >
				</form>
			</div>	
			</div>	
		</div>	
    </div>
</div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>
 <!--banner-->
<div class="banner-top">
	<div class="container" style="visibility: hidden;">
		
		<h4><a href="index.php">Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Employee/Dealer Login</h3>
					<?php

					if ($_GET['id']) {$id=$_GET['id'];
						if ($id=='error') {
						 	# code...
						 } echo "<p style='font-size:30px;color:red;'>Please Fill Correct Info</p>";
					  	# code...
					  }  ?>
					<form actio="check.php" method="post">
						<div class="key">
							<i class="fa " aria-hidden="true"></i>
							<input  type="text" value="Enter CRPF Unique Id" name="username" id="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter CRPF Unique Id';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="password" id="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="dealerlogin" name="dealerlogin" id="dealerlogin">
					</form>
				</div>
				<div class="forg">
					<a href="#" class="forg-left">Forgot Password</a>
					<a href="register.html" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
<!--footer-->

<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

</body>
</html>