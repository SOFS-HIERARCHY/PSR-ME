<?php
$to = "nirmala@sofs.in";
$subject = $_POST['name'];
$location = $_POST['location'];
$phno = $_POST['phone'];
$email = $_POST['email'];
$txt = $_POST['message'];
$connection ="$location $phno $email $txt";
if(mail($to,$subject,$connection, "From:" . $email))
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Email sent successfully')
    window.location.href='http://sofs.in/home.php';
    </SCRIPT>");
}
?>