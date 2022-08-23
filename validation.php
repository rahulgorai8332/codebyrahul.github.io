<?php
session_start();
$con = mysqli_connect('localhost','id19446820_codebyrahul','#Rahulgorai@2003');
mysqli_select_db($con, 'id19446820_loginpage');
$name = $_POST['uname'];
$email = $_POST['emal'];
$pass = $_POST['passw'];
$s = "select * from usertable where  email='$email' && password='$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
    $alert ="<script>alert('Login Succesfully...');</script>";
    echo $alert;
    header('location:index.html');
}
else{
    header('location:login.html');

}
?>