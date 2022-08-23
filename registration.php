<?php
session_start();
$con = mysqli_connect('localhost','id19446820_codebyrahul','#Rahulgorai@2003');
mysqli_select_db($con, 'id19446820_loginpage');
$name = $_POST['uname'];
$email = $_POST['emal'];
$pass = $_POST['passw'];
$s = "select * from usertable where  email='$email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
    $alert ="<script>alert('Email Are Already taken...');</script>";
    echo $alert;
}
else{
    $reg= "  insert into usertable(name,email,password)values('$name','$email','$pass')";
    mysqli_query($con,$reg);
    echo"Registration Succesful";
    header('location:login.html');
}
?>