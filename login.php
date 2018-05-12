<!DOCTYPE html>
<html>
<head>
	<title>homeys</title>
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





</head>
<body>
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
				 <li>
<?php
session_start();
$_SESSION['username']=$_POST['username'];
?>
<?php
$form_username=$_POST['username'];
$form_password=$_POST['password'];

echo "<br>";
$dbc=mysqli_connect('localhost','root','','2015cse052')or die('error connecting to mysql server');
$query="select * from users where username='$form_username' and password='$form_password'";
$result=mysqli_query($dbc,$query)or die('error querying database');
$row=mysqli_fetch_array($result);
if($form_password==$row['password'])
		{	echo $_SESSION['username'];
        }
else
{
echo "<center>Not registered</center>";
echo "<br>";
echo "<br>";
echo '<center><a href="sign_up.html"><button>Signup</button></a></center>';
}
?> 	
				 </li>
				 <li><a class="" href="login2.html">Logout</a></li>
				 </ul>
			 </div>
			  <!-- script-for-menu -->







</body>
</html>