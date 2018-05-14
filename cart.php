 <?php
 session_start();
 $connect = mysqli_connect('localhost', 'root', '', '2015cse052');
 if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], "slno");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                     'slno'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["name"],
                     'price'          =>     $_POST["price"],
                     'quantity'          =>     $_POST["quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
           }
           else
           {
                echo '<script>alert("Item Already Added")</script>';
                echo '<script>window.location="cart.php"</script>';
           }
      }
      else
      {
           $item_array = array(
                'slno'               =>     $_GET["id"],
                'item_name'               =>     $_POST["name"],
                'price'          =>     $_POST["price"],
                'quantity'          =>     $_POST["quantity"]
           );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
                if($values["slno"] == $_GET["id"])
                {
                     unset($_SESSION["shopping_cart"][$keys]);
                     echo '<script>alert("Item Removed")</script>';
                     echo '<script>window.location="cart.php"</script>';
                }
           }
      }
 }
 ?>


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
<style type="text/css">
  tr {
    color: white;
    text-align: center;
    }
h3 {
  color: white;
  text-align: center;
}
h4 {
  color: white;
}
</style>
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
         <li><a class="scroll" href="#contact">Contact</a></li>
         
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


<br/>

                <?php
                $query = "SELECT * FROM menu";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result)>0)
                {
                     while($row = mysqli_fetch_array($result))
                     {
                ?>
                <div class="col-md-4" align="center">


                     <form method="post" action="cart.php?action=add&id=<?php echo $row["slno"]; ?>">
                          <div style="border:1px solid white; background-color:rgba(100,150,100,0.9); border-radius:5px; padding:16px;" align="center">
                              <center><h4 class="text-info" ><?php echo $row["item_name"]; ?></h4></center>
                               <center><h4 class="text-danger">Rs. <?php echo $row["item_price"]; ?></h4></center>
                               <center><input type="number" name="quantity" class="form-control" value="1" /></center>
                               <center><input type="hidden" name="hidden_name" value="<?php echo $row["item_name"]; ?>" /></center>
                               <center><input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /></center>
                               <center><input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  </center>
                          </div>
                     </form>  </table>
                </div>
                <?php
                     }
                }
                ?>
                <div style="clear:both"></div>
                <br />
                <h3>Order Details</h3>  <br><br>
                <div class="table-responsive">
                     <table bgcolor="indianRed",border="grey" class="table table-bordered">
                          <tr>
                               <center><th width="40%"><font  >  Item Name</font> </th>
                               <th width="10%"><font> Quantity </font></th>
                               <th width="20%"><font> Price </font></th>
                               <th width="15%"><font> Total </font></th>
                               <th width="5%"><font>  Action </font></th></center>
                          </tr>
                          <?php
                          if(!empty($_SESSION["shopping_cart"]))
                          {
                               $total = 0;
                               foreach($_SESSION["shopping_cart"] as $keys => $values)
                               {
                          ?>
                          <tr>
                               <td><center><?php echo $values["item_name"]; ?></td></center>
                               <td><center><?php echo $values["quantity"]; ?></center></td>
                               <td><center>Rs. <?php echo $values["price"]; ?></center></td>
                               <td><center>Rs. <?php echo number_format($values["quantity"] * $values["price"], 2); ?></center></td>
                               <td><center><a href="cart.php?action=delete&id=<?php echo $values["slno"]; ?>"><font color="black"><span class="text-danger">Remove</span></font></a></center></td>
                          </tr>
                          <?php
                                    $total = $total + ($values["quantity"] * $values["price"]);
                               }
                          ?>
                          <tr>
                               <td colspan="3" align="right">Total</td>
                               <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
                               <td></td>
                          </tr>
                          <?php
                          }
                          ?>
                     </table>
                </div>
           </div>
           <br />

     <div class="clearfix"></div>
   </div>
</div>
<!---->
  <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>
</td></tr></table></div></div></div>
     <!-- start slider -->


<!---//End-banner---->
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen" />
    <script type="text/javascript">
      $(function() {
        $('.gallery a').lightBox();
      });
</script>
<!---->
<div id="contact" class="contact">
   <div class="container">
     <div class="contact-text">
      <h3>Contact us</h3>
      <span></span>
     </div>
     <div class="contact-grids">
       <div class="col-md-4 contact-grid text-center wow bounceIn" data-wow-delay="0.4s">
         <div class="icon1"></div>
         <p>Phone: (+91) 9108897344 </p>
         <p>Fax: (412) 25458632</p>
       </div>
       <div class="col-md-4 contact-grid text-center wow bounceIn" data-wow-delay="0.4s">
         <div class="icon2"></div>
         <p>No.10 , 3rd cross, Kullappa circle,</p>
         <p>Kammanahalli, Bangalore 84</p>
         <p>Karnataka, INDIA</p>
       </div>
       <div class="col-md-4 contact-grid text-center wow bounceIn" data-wow-delay="0.4s">
         <div class="icon3"></div>
         <a href="mailto:example.com">isaacabraham1997@gamil.com</a>
       </div>
       <div class="clearfix"></div>
     </div>

   </div>
</div>
<!---->
<div class="footer text-center">
   <div class="container">
     <a class="wow bounceIn" data-wow-delay="0.5s" href="index.html">
          <p>Homeys</p>
     </a>

     <div class="social">
       <a href="#"><span class="behance"></span></a>
       <a href="#"><span class="dribble"></span></a>
       <a href="#"><span class="twitter"></span></a>
       <a href="#"><span class="facebook"></span></a>
       <a href="#"><span class="linkedin"></span></a>
     </div>
   </div>
</div>
<!---->
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
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
</body>
</html>
