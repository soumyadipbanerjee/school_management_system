<?php

$fname = $_POST [ 'fname' ] ;
$lname = $_POST [ 'lname' ] ;
$email = $_POST [ 'email' ] ;
$subject = $_POST [ 'subject' ] ;

echo ("Thankyou for your response" .$fname.) ;
$connection=mysqli_connect ("localhost" , "id16774539_naturedb" , "3sA/)vb%6(BA!zw=" , "id16774539_banerjee") ;
$insert ="INSERT INTO contact SET name = '$name' , Email = '$email' , mobile = '$mobile'";
$connection = >Query ($insert) ;
?>