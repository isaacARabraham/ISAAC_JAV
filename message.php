<!DOCTYPE html>
<html>
<head>
<title>Homeys</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Spicy Cuisine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!--/animated-css-->
</head>
<body>

<!---->
<div class="banner">
	 <div class="container">
		 <div class="header">
			 <div class="logo wow fadeInLeft" data-wow-delay="0.5s">
             <font color="white" size="30px" style="times"> Homeys </font>
			 <a href="index.html"></a>
			 </div>
			 <div class="top-menu">
			 <span class="menu"></span>
				 <ul>
				 <li class="active"><a href="index.html">Home</a></li>
				
				 <li><a class="" href="login2.html">Login </a></li>
				 </ul>
			 </div>
			  <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
			 <div class="clearfix"></div>
		 </div>

    <?php
    $form_name=$_POST['name'];
    $form_email=$_POST['email'];
    $form_phonenumber=$_POST['phonenumber'];
    $form_message=$_POST['message'];


    echo "<br>";
    $dbc=mysqli_connect('localhost','root','','2015cse052')or die('Error Not able to connect to the database');


    $sql2="insert into message(name,email,phonenumber,message) values('$form_name','$form_email','$form_phonenumber','$form_message')";
    ?>
<h1><center><font color="white">Thanks for your review on us </font></center></h1>
<h3><center><font color="white">Hope you enjoy our service   </font></center></h3>
</body>
</html>