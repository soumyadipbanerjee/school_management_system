<?php

$fname = $_POST [ 'fname' ] ;
$lname = $_POST [ 'lname' ] ;
$email = $_POST [ 'email' ] ;
$mobile = $_POST [ 'mobile' ] ;
$uname = $_POST [ 'uname' ] ;
$pword = $_POST [ 'pword' ] ;

echo ("Thankyou for signing in  " .$fname) ;
$signup=mysqli_connect ('localhost' , 'id16774539_signup_db' , '>x]-I#>J7mjmk!dh' , 'id16774539_signup') ;
$insert ="INSERT INTO sign_db SET fname = '$fname' , lname='$lname', Email = '$email' , mobile = '$mobile', uname = '$uname', pword = '$pword'";
$signup  ->Query ($insert) ;
?>