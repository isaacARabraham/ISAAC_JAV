<?php
$form_name=$_POST['name'];
$form_username=$_POST['username'];
$form_password=$_POST['password'];
$form_email=$_POST['email'];
$form_contact=$_POST['phonenumber'];
$form_address=$_POST['address'];
$form_place=$_POST['placeofdelivery'];


echo "<br>";
$dbc=mysqli_connect('localhost','root','','2015cse052')or die('Error Not able to connect to the database');


$sql2="insert into users(name,username,password,email,phonenumber,address,placeofdelivery) values('$form_name','$form_username','$form_password','$form_email',$form_contact,'$form_address','$form_place')";


if(mysqli_query($dbc,$sql2))
{
echo "<center>Your have successfully signed in!</center>";
echo "<br>";
}
else{
    $count=mysqli_errno($dbc);
    }


?>