<?php


$email = $_POST [ 'email' ] ;
$username = $_POST [ 'username' ] ;
$psw = $_POST [ 'psw' ] ;

echo ("Registered username is" .$username. "Email is" .$email.) ;
$connection=mysqli_connect ("localhost" , "id16774539_naturedb" , "3sA/)vb%6(BA!zw=" , "id16774539_banerjee") ;
$insert ="INSERT INTO contact SET name = '$name' , Email = '$email' , mobile = '$mobile'";
$connection = >Query ($insert) ;
?>